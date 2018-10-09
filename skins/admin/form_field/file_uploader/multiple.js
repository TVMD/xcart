/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * file uploader controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('multiple_file_uploader', [
  'vue/vue',
  'js/vue/vue',
  'file_uploader'
], function (Vue, XLiteVue) {
  XLiteVue.component('xlite-multiple-file-uploader', {
    ready: function () {
      this.processSortable();
      this.repositionFiles(true);
    },

    events: {
      'new-file-uploaded': function (data, fileUploader) {
        var element = jQuery(data).find('xlite-file-uploader');

        if (element.length) {
          element.insertBefore(jQuery(fileUploader.getFileUploaderElement()));
          var v = new Vue();
          v.el = element.get(0);
          v.$compile(element.get(0), this);
          this.repositionFiles();
        }
        fileUploader.$reload();
      }
    },

    methods: {
      getMultipleFileUploaderElement: function () {
        return $(this.$el).closest('.multiple-files');
      },
      processSortable: function () {
        var self = this;
        this.getMultipleFileUploaderElement().sortable({
          placeholder:          'ui-state-highlight',
          forcePlaceholderSize: false,
          distance:             10,
          items:                '> div.item',
          update:               function(event, ui)
          {
            self.repositionFiles();
          },
          activate: function(event, ui) {
            if (ui.item.hasClass('open')) {
              ui.item.find('.link').dropdown('toggle');
            }
          }
        });
      },
      repositionFiles: function (saveAsInitial) {
        base = jQuery(this.getMultipleFileUploaderElement());

        var min = 10;
        base.find('input.input-position').each(function () {
          min = parseInt(10 == min ? min : Math.min(this.value, min));
        });

        base.find('input.input-position').each(function () {
          jQuery(this).val(min);
          if (saveAsInitial) {
            if (this.commonController) {
              this.commonController.saveValue();
            }

          } else {
            jQuery(this).change();
          }
          min += 10;
        });
      }
    }
  });
});
