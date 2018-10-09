/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Webmaster mode component
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('themetweaker/webmaster_mode', ['js/vue/vue'], function (XLiteVue) {

    XLiteVue.component('xlite-webmaster-mode', {
        props: ['interface', 'treeKey'],
        mixins: [VueLoadableMixin],

        activate: function (done) {
            core.trigger('webmaster-mode.activate', this);
            done();
        },

        data: function() {
            return {
                template: null,
            }
        },

        ready: function() {
            core.trigger('webmaster-mode.ready', this);

            this.findElements();
            this.initializeTree();
            this.assignHandlers();

            this.$tree.prepend(this.$controlPanel);
            this.$wrapper.show();

            this.$reloading = true;

            _.defer(_.bind(function() {
                this.initializeTemplateNavigator();
                this.$reloading = false;
            }, this));
        },

        vuex: {
            getters: {
                switcher: function(state) {
                    return state.actions.switcher;
                },
            },

            actions: {
                setSwitcherState: function(state, value) {
                    state.dispatch('TOGGLE_SWITCHER', value);
                },
            }
        },

        computed: {
            treeClasses: function () {
                return {
                    'reloading': this.$reloading,
                    'reloading-animated': this.$reloading
                }
            },
        },

        watch: {
            'switcher': function(value, oldValue) {
                if (oldValue !== null) {
                    this.templateNavigator.toggleEnabled();
                }
            }
        },

        events: {
            'panel.disable': function() {
                this.clearJstreeCache();
            },
            'panel.switch': function() {
                this.clearJstreeCache();
            }
        },

        methods: {
            findElements: function() {
                this.$wrapper = jQuery('[data-editor-wrapper]', this.$el);
                this.$controlPanel = jQuery('[data-editor-control-panel]', this.$el);
            },

            initializeTree: function() {
                var treeElement = jQuery('[data-editor-tree]').detach();
                this.originalTree = treeElement.get(0).cloneNode(true);
                this.$wrapper.append(treeElement);
                this.$tree = jQuery('[data-editor-tree]', this.$el);
                this.treeView = new TreeView(this.$tree, this.getJstreeOptions());
                this.interface = this.$tree.data('interface');
                this.innerInterface = this.$tree.data('inner-interface');
            },

            getJstreeOptions: function() {
                return {
                    state: {
                        key: this.treeKey,
                        ttl: 86400000 // one day in msec
                    },
                    plugins: [ "state", "types" ]
                };
            },

            clearJstreeCache: function() {
                var keys = Object.keys(localStorage);
                for (var index in keys) {
                    if (keys[index].indexOf('jstree') === 0) {
                        localStorage.removeItem(keys[index]);
                    }
                }
            },

            initializeTemplateNavigator: function() {
                var options = {
                    manual: true,
                    filters: [
                        ':not(#themetweaker-panel)',
                        ':not(#themetweaker-panel *)'
                    ]
                };

                this.templateNavigator = {};
                this.templateNavigator = new TemplateNavigator(this.$wrapper, options);
                this.setSwitcherState(this.templateNavigator.enabled);
            },

            assignHandlers: function() {
                core.bind('popup.postprocess', _.bind(this.onPopupOpen, this));
                this.assignTreeHandlers();
            },

            assignTreeHandlers: function() {
                this.$tree.on('select_node.jstree', _.bind(this.onTreeNodeSelect, this));
                this.$tree.on('hover_node.jstree', _.bind(this.onTreeNodeHover, this));
                this.$tree.on('dehover_node.jstree', _.bind(this.onTreeNodeHoverEnd, this));
            },

            onSwitch: function (event, data) {
                this.templateNavigator.toggleEnabled();
            },

            onPopupOpen: function(event, data) {
                if (data && data.widget && data.widget.currentPopup) {
                    var popup = data.widget.currentPopup.box;

                    if (this.lastProcessedPopup === popup.attr('id')) {
                        return;
                    }

                    var newTree = popup.find('[data-editor-tree]');
                    var nodes = null;
                    if (newTree.length > 0) {
                        nodes = newTree.children('ul').first().children('li').addClass('themetweaker-popup-node').detach();
                        newTree.detach();
                    }

                    if (nodes) {
                        this.treeView.destroy(true);
                        this.$tree.append(this.originalTree.innerHTML);
                        this.$tree.children('ul').first().append(nodes);
                        this.treeView.mount();
                        this.assignTreeHandlers();
                        this.lastProcessedPopup = popup.attr('id');
                        this.templateNavigator.processHtmlElements(popup.find('*'));

                        var id = nodes.first().data('template-id');
                        this.treeView.selectTemplate(id, false);
                    }
                }
            },

            onTreeNodeSelect: function (event, data) {
                if (!this.treeView.preventEdit) {
                    this.template = data.node.data.templatePath;
                }
            },

            onTreeNodeHover: function (event, data) {
                this.templateNavigator.markTemplateById(data.node.data.templateId);
            },

            onTreeNodeHoverEnd: function (event, data) {
                this.templateNavigator.unMarkTemplate();
            },
        }
    });
});
