/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Script
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */


core.microhandlers.add(
  'currency_converter_api_key',
  'select#rate-provider',
  function () {
    var toggle_currency_converter_api_key = function (show) {
      if (show) {
        $('.table-label.currency-converter-api-key-label').show();
        $('.table-label.currency-converter-api-key-label + .star').show();
        $('.table-value.currency-converter-api-key-value').show();
      } else {
        $('.table-label.currency-converter-api-key-label').hide();
        $('.table-label.currency-converter-api-key-label + .star').hide();
        $('.table-value.currency-converter-api-key-value').hide();
      }
    };

    $(this).change(function () {
      toggle_currency_converter_api_key($(this).val() === 'currency_converter_api');
    }).change();
  }
);