/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Slidebar
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('themetweaker/panel_start', ['js/vue/vue', 'ready'], function (XLiteVue) {
    if (core.isDeveloperMode) {
        Vue.config.debug = true;
        Vue.config.devtools = true;
    }

    XLiteVue.start('#themetweaker-panel-loader-point');
});

define('themetweaker/panel', ['js/vue/vue', 'themetweaker/store'], function (XLiteVue, Store) {
    XLiteVue.component('xlite-themetweaker-panel', {
        props: ['mode'],
        mixins: [VueLoadableMixin],
        store: Store,

        activate: function (done) {
            core.trigger('themetweaker-panel.activate', this);
            done();
        },

        ready: function() {
            $('[data-toggle="tooltip"]', this.$el).tooltip();
            core.trigger('themetweaker-panel.ready', this);
            this.$panel = jQuery('.themetweaker-panel', this.$el);
            jQuery(this.$el).removeClass('themetweaker-panel--initial');

            var self = this;
            this.$nextTick(function() {

                self.initializePanelHeight();

                if (self.isExpanded === true) {
                    self.$panel.removeClass('expand-transition');
                    self.autoResizeContent();
                    self.autoResizeFooter();
                }

                self.enablePanelInteractionWhileInPopup();
                self.enableResizing();
            });

            if (this.mode) {
                this.isExpanded = true;
            }
        },

        data: function () {
            return {
                isExpanded: this.getInitialExpandedState(),
                isExitConfirmVisible: false,
                callbacks: {
                    exitConfirm: {
                        save: null,
                        cancel: null,
                        discard: null
                    }
                }
            }
        },

        vuex: {
            getters: {
                switcher: function(state) {
                    return state.actions.switcher;
                },

                isChanged: function(state) {
                    return state.webmaster.isChanged
                        || state.layoutEditor.isChanged
                        || state.customCss.isChanged
                        || state.inlineEditor.isChanged;
                },

                saveAvailable: function(state) {
                    return state.actions.saveAvailable;
                },
            },

            actions: {
                toggleSwitcher: function(state, value) {
                    state.dispatch('TOGGLE_SWITCHER', value);
                },
            }
        },

        computed: {
            MIN_HEIGHT: function() { return 30; },
            MAX_HEIGHT: function() { return 500; },
            PANEL_ENABLED_HEIGHT: function() { return 'ThemeTweaker.panelHeight.enabled'; },
            PANEL_DISABLED_HEIGHT: function() { return this.MIN_HEIGHT; },
            panelClasses: function () {
                return {
                    'reloading': this.$reloading,
                    'reloading-animated': this.$reloading
                }
            },
        },

        watch: {
            isExpanded: function(value) {
                jQuery.cookie('ThemeTweakerPanel_isExpanded', value);
            }
        },

        transitions: {
            'expand': {
                beforeEnter: function (el) {
                    this.$panel.addClass('expand-transition');
                },
                afterEnter: function (el) {
                    this.$panel.removeClass('expand-transition');
                    this.autoResizeContent();
                    this.autoResizeFooter();
                },
                beforeLeave: function (el) {
                    this.$panel.addClass('expand-transition');
                },
                afterLeave: function (el) {
                    this.autoResizeFooter();
                },
            }
        },

        events: {
            blockPanel: function() {
                this.$reloading = true;
            },

            unblockPanel: function() {
                this.$reloading = false;
            },

            triggerSave: function() {
                var self = this;
                this.$once('completed.save', function(callback) {
                    if (_.isFunction(callback)) {
                      callback();
                    } else {
                      self.$emit('unblockPanel');
                    }
                });
                this.$once('failed.save', function() {
                  self.$emit('unblockPanel');
                });
                this.savePanel();
            },

            'exitConfirm.cancel': function() {
                this.hideExitConfirm();
                if (this.callbacks.exitConfirm.cancel) {
                    this.callbacks.exitConfirm.cancel.apply(this);
                }
            }
        },

        methods: {
            getInitialExpandedState: function() {
                return jQuery.cookie('ThemeTweakerPanel_isExpanded') == 'true';
            },

            initializePanelHeight: function() {
                var savedHeight = this.getPanelHeight();

                if (savedHeight) {
                    this.$panel.css('height', savedHeight);
                }
            },

            enablePanelInteractionWhileInPopup: function() {
                jQuery.widget( "ui.dialog", jQuery.ui.dialog, {
                    _allowInteraction: function( event ) {
                        return !!$( event.target ).closest( ".themetweaker-panel" ).length || this._super( event );
                    }
                });
            },

            enableResizing: function() {
                this.$panel.resizable({
                    handles: "n",
                    maxHeight: this.MAX_HEIGHT,
                    minHeight: this.MIN_HEIGHT,
                });

                this.$panel.on("resize", _.bind(this.autoResizeContent, this));
                this.$panel.on("resizestop", _.bind(this.autoResizeContent, this));
                this.$panel.on("resizestop", _.bind(this.autoResizeFooter, this));
            },

            autoResizeContent: function() {
                var panelHeight = this.$panel.height();
                var tabs = this.$panel.find('[data-panel-tabs]');
                jQuery('[data-panel-content]', this.$panel).css('height', panelHeight - tabs.height());

                this.setPanelHeight(panelHeight);
                this.$broadcast('panel.resize');
            },

            autoResizeFooter: function() {
                var height = this.$panel.height();
                jQuery('#footer-area').css('margin-bottom', height);
            },

            sendSwitchRequest: function(mode) {
                var data = {};
                data[xliteConfig.form_id_name] = xliteConfig.form_id;

                if (mode) {
                    data['mode'] = mode;
                }

                return core.post(
                    {
                        base: xliteConfig.admin_script,
                        target: 'theme_tweaker',
                        action: 'switch_mode'
                    },
                    null,
                    data
                );
            },

            sendCloseRequest: function() {
                var data = {};
                data[xliteConfig.form_id_name] = xliteConfig.form_id;
                return core.post(
                    {
                        base: xliteConfig.admin_script,
                        target: 'theme_tweaker',
                        action: 'disable'
                    },
                    null,
                    data
                );
            },

            savePanel: function() {
                if (this.saveAvailable && this.isChanged) {
                    this.$dispatch('blockPanel');
                    this.$broadcast('action.save');
                }
            },

            showPanel: function() {
                this.isExpanded = true;
            },

            hidePanel: function() {
                var self = this;

                var completion = function(callback) {

                    this.$broadcast('panel.disable');

                    if (_.isFunction(callback)) {
                        this.disablePanel().always(callback);
                    } else {
                        this.disablePanel().always(function () {
                          self.$emit('unblockPanel');
                        });
                    }

                    this.isExpanded = false;
                };

                var onSave = function() {
                    this.$once('completed.save', _.bind(completion, this));
                    this.$once('failed.save', function() {
                        self.$emit('unblockPanel');
                    });
                    this.savePanel();
                };

                var onDiscard = completion;

                if (this.mode && this.isChanged) {
                    this.exitConfirm(onSave, onDiscard);
                } else {
                    onDiscard.apply(this);
                }
            },

            disablePanel: function() {
                this.mode = null;
                $(this.$el).find('.themetweaker-tab.active').removeClass('active');
                this.toggleSwitcher(false);
                this.initializePanelHeight();
                return this.sendCloseRequest();
            },

            switchTab: function(mode) {
                var self = this;
                var completion = function(callback) {
                    // TODO: ignores callback right now because only webmaster mode is using it to reload the page, needs to be reimplemented
                    this.$broadcast('panel.switch');
                    this.sendSwitchRequest(mode);
                };

                var onSave = function() {
                    this.$once('completed.save', _.bind(completion, this));
                    this.$once('failed.save', function() {
                        self.$emit('unblockPanel');
                    });
                    this.savePanel();
                };

                var onDiscard = function() {
                    this.$dispatch('blockPanel');
                    completion.apply(this);
                };

                if (this.mode && this.isChanged) {
                    this.exitConfirm(onSave, onDiscard);
                } else {
                    onDiscard.apply(this);
                }
            },

            exitConfirm: function(onSave, onDiscard, onCancel) {
                this.callbacks.exitConfirm.save = onSave;
                this.callbacks.exitConfirm.discard = onDiscard;
                this.callbacks.exitConfirm.cancel = onCancel;
                this.showExitConfirm();
            },

            getPanelHeight: function() {
                switch(this.mode) {
                    case 'webmaster':
                    case 'layout_editor':
                    case 'custom_css':
                        var value = localStorage.getItem(this.PANEL_ENABLED_HEIGHT);
                        return value !== null
                            ? Math.min(Math.max(this.MIN_HEIGHT, value), this.MAX_HEIGHT)
                            : null;
                    default:
                        return this.PANEL_DISABLED_HEIGHT;
                }
            },

            setPanelHeight: function(value) {
                var height = Math.min(Math.max(this.MIN_HEIGHT, value), this.MAX_HEIGHT);
                switch(this.mode) {
                    case 'webmaster':
                    case 'layout_editor':
                    case 'custom_css':
                        localStorage.setItem(this.PANEL_ENABLED_HEIGHT, height);
                        break;
                }
            },

            showExitConfirm: function() {
                this.isExitConfirmVisible = true;
            },

            hideExitConfirm: function() {
                this.isExitConfirmVisible = false;
            },

            onExitConfirmSave: function() {
                this.hideExitConfirm();
                if (this.callbacks.exitConfirm.save) {
                    this.callbacks.exitConfirm.save.apply(this);
                }
            },

            onExitConfirmDiscard: function() {
                this.hideExitConfirm();
                if (this.callbacks.exitConfirm.discard) {
                    this.callbacks.exitConfirm.discard.apply(this);
                }
            },
        }
    });
});
