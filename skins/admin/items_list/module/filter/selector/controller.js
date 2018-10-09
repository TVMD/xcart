/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Selector
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */
core.microhandlers.add(
  'Selector',
  '.menu.selector',
  function () {
    var menu = jQuery(this);
    jQuery('.title', menu).click(function (e) {
      e.stopPropagation();
      jQuery('.menu.selector').not(menu).removeClass('expanded');
      menu.toggleClass('expanded');
    });

    jQuery(document).click(function () {
      menu.removeClass('expanded')
    });
  }
);
