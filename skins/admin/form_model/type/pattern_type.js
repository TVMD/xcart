/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Controller
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

(function () {

  Vue.directive('xlitePattern', {
    params: ['pattern'],
    bind: function () {
      var pattern = this.params.pattern;
      Inputmask(JSON.parse(pattern)).mask(this.el);
    }
  });

})();
