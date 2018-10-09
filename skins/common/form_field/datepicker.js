/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Date picker controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */
function datePickerPostprocess(input, elm)
{
}

jQuery().ready(
  function() {
    jQuery('.date-picker-widget').each(
      function () {
        var elem = jQuery(this);
        var options = core.getCommentedData(elem);
        var locale = options.locale;
        var defaultDate = jQuery(elem).find('input[type="text"]').val();

        var formatDefaultLocaleDate = function (format, date) {
          var formattedDate = $.datepicker.formatDate( format, new Date(date), {
              dayNamesShort: $.datepicker.regional[''].dayNamesShort,
              dayNames: $.datepicker.regional[''].dayNames,
              monthNamesShort: $.datepicker.regional[''].monthNamesShort,
              monthNames: $.datepicker.regional[''].monthNames
          });

          return formattedDate;
        };

        var changeHiddenValue = function ($el) {
          $($el).siblings('.datepicker-value-input')
              .val(formatDefaultLocaleDate($($el).datepicker('option', 'dateFormat'), $($el).datepicker('getDate')));
        };

        $.datepicker.setDefaults($.datepicker.regional['']);
        if ($.datepicker.regional[locale] !== undefined) {
            $.datepicker.setDefaults($.datepicker.regional[locale]);

            if (defaultDate !== undefined && defaultDate !== '') {
                defaultDate = $.datepicker.formatDate(options.dateFormat, new Date(defaultDate));
                jQuery(elem).find('input[type="text"]').val(defaultDate);
            }
        }

        jQuery(elem).find('input[type="text"]')
            .change(function (event) {
                changeHiddenValue(this);
            })
            .datepicker({
              dateFormat:        options.dateFormat,
              gotoCurrent:       true,
              firstDay:          options.firstDay,
              yearRange:         options.highYear + ':' + options.lowYear,
              showButtonPanel:   false,
              beforeShow:        datePickerPostprocess,
              selectOtherMonths: true,
              onSelect: function (date) {
                changeHiddenValue(this);
                jQuery(this).change();
              }
            });
    });
  }
);
