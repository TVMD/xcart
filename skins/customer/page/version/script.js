/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Product box controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

jQuery(document).ready(function() {
  var options = {
    "columns": [
      { "orderData": [ 0, 1 ] },
      { "orderData": [ 1, 1 ] },
      { "orderData": [ 2, 1 ] },
      { "orderData": [ 3, 1 ] },
    ],
    "paging": false,
    "info": false,
  };

  jQuery('#private-modules').DataTable(options);
  jQuery('#public-modules').DataTable(options);

  jQuery('input[type="search"]').attr('placeholder', 'Search by keyword');
});
