/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Zone details form controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

core.bind('load', function (event) {
  setTimeout(function () {
    var statesListbox = $('#zone-states-listbox-select-from').get(0);

    if (statesListbox) {
      var hiddenOptions = $('<div></div>').css({display: 'none'});
      statesListbox.showForCountries = function (countries) {
        if (countries && countries.length) {
          $(this).add(hiddenOptions).find('option').each(function () {
            var match = false;
            var value = $(this).val();

            countries.forEach(function (v) {
              if (value.startsWith(v + '_')) {
                match = true;
              }
            });

            if (match) {
              $(this).appendTo(statesListbox);
            } else {
              $(this).appendTo(hiddenOptions);
            }
          })
        } else {
          $(this).add(hiddenOptions).find('option').appendTo(statesListbox);
        }

        var options = $(this).find('option').sort(function(a, b) { return $(a).text() > $(b).text() ? 1 : -1; });
        $(statesListbox).append(options);
      };

      $('input[name="states_for_countries"][type=checkbox]').change(function () {
        var countryCodes = [];

        $('#zone-countries-listbox-select-to').find('option').each(function () {
          countryCodes.push($(this).val());
        });

        if ($(this).is(':checked')) {
          statesListbox.showForCountries(countryCodes);
        } else {
          statesListbox.showForCountries();
        }
      }).change();
    }
  }, 0);
});
