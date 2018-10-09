/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Modules list controller (install)
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

core.microhandlers.add(
  'SalesChannelPopup',
  '.widget-itemslist-module-saleschannels',
  function () {
    var $element = jQuery('.marketplace-wrapper', this);
    var scrollHeight = $element.get(0).scrollHeight;

    var scrollHandler = function () {
      $element.toggleClass('scroll-bottom', $element.scrollTop() + $element.innerHeight() >= scrollHeight);
      $element.toggleClass('scroll-top', $element.scrollTop() <= 0);
    };

    $element.on('scroll', scrollHandler);
    scrollHandler();
  }
);