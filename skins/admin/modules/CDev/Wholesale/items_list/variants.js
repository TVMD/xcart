/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Variants items list actions
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

jQuery(document).ready(function () {
  $('div.variants .items-list-table table.list th.wholesalePrices').remove();
  $('div.variants .items-list-table table.list th.price').attr('colspan', 2);
});