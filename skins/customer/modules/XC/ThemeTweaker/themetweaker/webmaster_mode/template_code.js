/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Webmaster mode component
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('themetweaker/webmaster_mode/template_code', ['js/vue/vue'], function (XLiteVue) {
    function createEscaper (map) {
        var escaper = function(match) {
            return map[match];
        };
        var source = '(?:' + _.keys(map).join('|') + ')';
        var testRegexp = RegExp(source);
        var replaceRegexp = RegExp(source, 'g');
        return function(string) {
            string = string == null ? '' : '' + string;
            return testRegexp.test(string) ? string.replace(replaceRegexp, escaper) : string;
        };
    }

    XLiteVue.component('xlite-template-code', {
        props: ['template', 'interface'],
        mixins: [VueLoadableMixin],

        loadable: {
            transferState: false,
            loader: function() {
                var params = {
                    templatePath: this.template,
                    interface: this.interface,
                };

                return core.get(
                    _.extend({
                        base: xliteConfig.admin_script,
                        target: 'theme_tweaker_template',
                        widget: 'XLite\\Module\\XC\\ThemeTweaker\\View\\ThemeTweaker\\TemplateCode'
                    }, params),
                    undefined, undefined, { timeout: 45000 }
                );
            },
            resolve: function() {
                var self = this;
                this.$nextTick(function() {
                    self.initTextarea();
                });
            },
            reject: function() {
            }
        },

        vuex: {
            getters: {
                switcher: function(state) {
                    return state.actions.switcher;
                },

                content: function(state) {
                    return state.webmaster.currentState;
                }
            },

            actions: {
                updateStoreState: function(state, value, updateOriginal) {
                    state.dispatch('WEBMASTER_MODE_UPDATE_STATE', value, updateOriginal);
                },
            }
        },

        activate: function (done) {
            core.trigger('template-code.activate', this);
            done();
        },

        ready: function() {
            core.trigger('template-code.ready', this);

        },

        events: {
            'panel.resize': function() {
                this.resizeTextarea();
            },

            'action.save': function() {
                var params = {
                    templatePath: this.template,
                    interface: this.interface,
                    content: this.content
                };

                params[xliteConfig.form_id_name] = xliteConfig.form_id;

                core.post(
                    {
                        base: xliteConfig.admin_script,
                        target: 'theme_tweaker_template',
                        action: 'apply_changes',
                    },
                    undefined, params, { timeout: 45000 }
                )
                    .done(_.bind(this.onSaveSuccess, this))
                    .fail(_.bind(this.onSaveFail, this));
            },
        },

        watch: {
            template: function() {
                this.$reload();
            },

            content: function() {

            }
        },

        computed: {
            classes: function () {
                return {
                    'reloading': this.$reloading,
                    'reloading-animated': this.$reloading
                }
            },

            codeMirrorInstance: {
                cache: false,
                get: function() {
                    return jQuery('[data-template-editor]').data('CodeMirror');
                }
            },

            isTextareaInitialized: {
                cache: false,
                get: function() {
                    return 'undefined' !== typeof(this.codeMirrorInstance);
                }
            },
        },

        methods: {
            initTextarea: function() {
                var textarea = this.$el.querySelector('[data-template-editor]');
                var content = this.$el.querySelector('[data-template-content]');
                var text = this.unescape(_.unescape(content.innerHTML));
                textarea.value = text;
                this.updateStoreState(text, true);

                core.autoload(CodeMirrorWidget, '[data-template-editor]');

                var self = this;
                this.$nextTick(function() {
                    self.resizeTextarea();
                    self.codeMirrorInstance.on('change', _.bind(self.onCodeMirrorChange, this));
                });
            },

            resizeTextarea: function() {
                if (this.isTextareaInitialized) {
                    var width = $(this.$el).width();
                    var height = $(this.$el).height();
                    this.codeMirrorInstance.setSize(width, height);
                }
            },

            onCodeMirrorChange: _.debounce(function (instance) {
                this.updateStoreState(instance.getValue());
            }, 300),

            onSaveSuccess: function() {
                this.$dispatch('completed.save', function() {
                    window.location.reload();
                });
                this.updateStoreState(this.content, true);
            },

            onSaveFail: function() {
                this.$dispatch('failed.save');
            },

            unescape: createEscaper({'&#039;':"'"}),

            escape: createEscaper({"'":'&#039;'})
        }
    });
});