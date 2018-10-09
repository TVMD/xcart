/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

core.microhandlers.add(
    'formModel',
    'xlite-form-model',
    function (event, element) {
      define('form_model_start', ['js/vue/vue', 'ready', 'form_model'], function (XLiteVue) {

        if (typeof(Inputmask) !== 'undefined') {
          Inputmask.extendAliases({
            xcdecimal: {
              alias:          "numeric",
              digitsOptional: false,
              groupSeparator: "",
              radixPoint:     "."
            }
          });
        }
      });
    }
);

define('form_model', ['js/vue/vue', 'form_model/sticky_panel'], function (XLiteVue, Panel) {
  var state = false;

  XLiteVue.component('xlite-form-model', {
    props: ['form', 'original', 'changed'],

    activate: function (done) {
      var self = this;
      setTimeout(function () {
        self.$set('original', JSON.parse(JSON.stringify(self.form)));
        state = true;
      }, 1000);
      done();
    },

    ready: function() {
      this.$form.submitted = false;
      core.trigger('vue-form.ready', this.$el);

      new CommonForm(this.$el);
    },

    directives: {
      xliteBackendValidator: {
        bind: function () {
          var el = this.el;
          this.vm.$watch(this.expression, function () {
            if (el.parentNode) {
              el.parentNode.removeChild(el);
            }
          })
        }
      },
      xliteValidateTrigger: {
        bind: function () {
          var el = this.el;
          this.vm.$watch(this.expression, _.bind(function () {
            this.el.fireEvent('blur');
          }, this));
        }
      }
    },

    methods: {
      reset: function () {
        var self = this;
        this.$form.submitted = false;
        this.$set('form', JSON.parse(JSON.stringify(this.original)));
        this.$dispatch('form-model-reset', self);

        this.$nextTick(function() {
          self.$resetValidation();
        });
      },
      isChanged: function (model, event) {
        if (state === false) {
          state = objectHash.sha1(this.form);
          state = null;

          return true;
        }

        if (state === null) {
          state = objectHash.sha1(this.form);

          return false;
        }

        var result = false;
        for (var sectionName in this.original) {
          for (var fieldName in this.original[sectionName]) {
            if (typeof this.original[sectionName][fieldName] == 'object') {
              var hash1, hash2;


              if (this.form[sectionName][fieldName] instanceof Array) {
                var obj1 = {}, obj2 = {};

                for(var index in this.form[sectionName][fieldName]) {
                  obj1[index] = this.form[sectionName][fieldName][index];
                }

                for(var index in this.original[sectionName][fieldName]) {
                  obj2[index] = this.original[sectionName][fieldName][index];
                }

                hash1 = objectHash.sha1(obj1);
                hash2 = objectHash.sha1(obj2);
              } else {
                hash1 = objectHash.sha1(this.form[sectionName][fieldName]);
                hash2 = objectHash.sha1(this.original[sectionName][fieldName]);
              }

              if (hash1 != hash2) {
                result = true;
              }
            } else {
              if (this.form[sectionName][fieldName] != this.original[sectionName][fieldName]) {
                result = true;
              }
            }
          }
        }

        result = result && !this.$form.invalid;

        this.changed = result;
        return result;
      },

      onSubmit: function (event) {
        var self = this;
        this.$form.submitted = true;
        this.$validate(true, function () {
          if (self.$form.invalid) {
            event.preventDefault()
          }
        })
      }
    },

    events: {
      'form-model-prop-updated': function (path, value) {
        this.$set(path, value);
      }
    }
  });
});
