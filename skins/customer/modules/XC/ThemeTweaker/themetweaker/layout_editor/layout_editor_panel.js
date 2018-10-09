/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Webmaster mode component
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('themetweaker/layout_editor', ['js/vue/vue'], function (XLiteVue) {
    XLiteVue.component('xlite-layout-editor', {
        consts: {
            TYPE_MOVE: 1,
            TYPE_HIDE: 2
        },

        activate: function (done) {
            core.trigger('layout-editor.activate', this);
            done();
        },

        ready: function() {
            core.trigger('layout-editor.ready', this);
            jQuery(this.$el).removeClass('layout-editor--initial');
            this.assignHandlers();
            this.initialize();
            this.setInitialState();
        },

        vuex: {
            getters: {
                switcher: function(state) {
                    return state.actions.switcher;
                },

                changeset: function(state) {
                    return state.layoutEditor.changeset;
                }
            },

            actions: {
                setSwitcherState: function(state, value) {
                    state.dispatch('TOGGLE_SWITCHER', value);
                },

                clearChangeset: function(state) {
                    state.dispatch('LAYOUT_EDITOR_CLEAR_CHANGESET');
                },

                updateChangeset: function(state, key, value) {
                    state.dispatch('LAYOUT_EDITOR_UPDATE_CHANGESET', key, value);
                },
            }
        },

        data: function () {
            return {
                hiddenBlocks: this.getHiddenBlocks()
            }
        },

        computed: {
            hiddenCount: {
                cache: false,
                get: function() {
                    return Object.keys(this.hiddenBlocks).length
                }
            },

            panelClasses: function () {
                return {
                    'layout-editor--disabled': !this.switcher
                }
            },
            state: {
                get: function() {
                    var key = 'layout-editor-mode';
                    return localStorage.getItem(key);
                },
                set: function(value) {
                    var key = 'layout-editor-mode';
                    localStorage.setItem(key, value);
                }
            },
        },

        watch: {
            'switcher': function(value, oldValue) {
                if (oldValue !== null) {
                    this.toggleEditor(value);
                }
            }
        },

        events: {
            'action.save': function() {
                var params = {
                    'changes': this.changeset
                };

                params[xliteConfig.form_id_name] = xliteConfig.form_id;

                core.post(
                    {
                        base: xliteConfig.admin_script,
                        target: 'layout_edit',
                        action: 'apply_changes'
                    },
                    null,
                    params
                )
                    .done(_.bind(this.onSaveSuccess, this))
                    .fail(_.bind(this.onSaveFail, this));
            }
        },

        methods: {
            initialize: function() {
            },

            assignHandlers: function() {
                core.bind('layout.moved', _.bind(this.onListChange, this));
                core.bind('layout.rearranged', _.bind(this.onListChange, this));
                core.bind('layout.hide', _.bind(this.onItemHide, this));
                core.bind('layout.unhide', _.bind(this.onItemUnhide, this));
            },

            getHiddenBlocks: function() {
                return jQuery('.list-item__hidden').toArray().reduce(function(blocks, elem) {
                    var item = jQuery(elem);
                    blocks[item.data('id')] = {
                        id: item.data('id'),
                        name: item.data('blockname'),
                        element: item
                    };
                    return blocks;
                }, {});
            },

            setInitialState: function() {
                var state = null;

                if (this.state === null) {
                    state = true;
                } else {
                    state = (this.state === "true");
                }

                this.setSwitcherState(state);
            },

            onListChange: function (event, data) {
                this.addChange(data.id, data.list, data.position, 1);
            },

            onItemHide: function (event, sender) {
                var item = $(sender).closest('.list-item');
                var list = item.closest('.list-items-group');
                item.listItem('hide');
                this.addChange(item.data('id'), list.data('list'), item.data('weight'), 2);

                Vue.set(this.hiddenBlocks, item.data('id'), {
                    id: item.data('id'),
                    name: item.data('blockname'),
                    element: item
                });
            },

            onItemUnhide: function (event, sender) {
                var item = $(sender).closest('.list-item');
                item.blur().removeClass('list-item__temporary');
                var list = item.closest('.list-items-group');
                this.addChange(item.data('id'), list.data('list'), item.data('weight'), 1);

                Vue.delete(this.hiddenBlocks, item.data('id'));
            },

            showBlock: function (block) {
                var item = block.element;

                if (!item.listItem('isHidden')) {
                    return;
                }

                if (!item.hasClass('list-item__temporary')) {
                    item.addClass('list-item__temporary').listItem('show');
                }

                item.listItem('focus');
            },

            addChange: function (id, list, weight, mode) {
                this.updateChangeset(id, {
                    id: id,
                    list: list,
                    weight: weight,
                    mode: mode
                });
            },

            onSaveSuccess: function (event) {
                core.trigger('message', {type: 'info', message: core.t('Changes were successfully saved')});
                this.clearChangeset();
                this.$dispatch('completed.save');
            },

            onSaveFail: function (event) {
                core.trigger('message', {type: 'error', message: core.t('Unable to save changes')});
                this.$dispatch('failed.save');
            },

            toggleEditor: function (state) {
                $('.list-container').each(function() {
                    $(this).data('controller').toggle(state);
                });

                localStorage.setItem('layout-editor-mode', state);
            },

            getBlockName: function (item) {
                return (item.name || core.t('Layout block'));
            }
        }
    });
});
