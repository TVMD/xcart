/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * X-Payments common functions for saved card address switcher
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function switchAddress(addressId)
{  
  var params = {};
  params['address_id'] = addressId;
  params[xliteConfig.form_id_name] = xliteConfig.form_id;

  core.post(
    URLHandler.buildURL({
      target: 'checkout',
      action: 'set_card_billing_address'
    }),
    null,
    params,
    {
      async:  false
    }
  );

  toggleCardAddressWarnings();
}

function getElementForCard(elm)
{
  var cardId = jQuery(elm).val();
  return jQuery('#saved-card-div-' + cardId);
}

function showAddressPopover(elm)
{
  elm = getElementForCard(elm);

  if (!elm || !elm.length) {
    return;
  }

  var addressId = elm.data('address-id');
  var cardId = elm.data('card-id');

  if (
    !cardId
    || !addressId
    || addressId == xpcBillingAddressId
  ) {
    // Billing address match so just hide popover
    hideAddressPopovers();

    return;
  }

  var opts = {
    placement: 'top',
    closeable: true,
    multi: false,
    cache: false,
    trigger: 'manual',
    width: '300px',
  };

  elm
    .webuiPopover('destroy')
    .webuiPopover(opts)
    .webuiPopover('show');
}

function hideAddressPopovers()
{
  WebuiPopovers.hideAll();
}

function initAddressPopovers() {

  toggleCardAddressWarnings();

  var exclamationEvents = jQuery('div.address-warning-icon').data('events');

  if ('undefined' == typeof exclamationEvents) {
    jQuery('div.address-warning-icon').on('click',
      function () {

        if (jQuery('.webui-popover').is(':visible')) {
          hideAddressPopovers();
        } else {
          var cardId = jQuery(this).data('card-id');
          var elm = jQuery('#saved-card-radio-' + cardId);
          showAddressPopover(elm);
        }

      }
    );
  }

  var cardEvents = jQuery("[name='payment[saved_card_id]']").data('events');

  if ('undefined' == typeof cardEvents || 'undefined' == typeof cardEvents.click) {
    jQuery("[name='payment[saved_card_id]']").on('click',
      function(event) {

        var params = {};
        params['selected_card_id'] = getElementForCard(this).data('card-id');
        params[xliteConfig.form_id_name] = xliteConfig.form_id;

        core.post(
          URLHandler.buildURL({
            target: 'checkout',
            action: 'save_selected_card_id',
          }),
          null,
          params
        );

      }
    );
  }

}

function toggleCardAddressWarnings() {
  jQuery('div.address-warning-icon').each(
    function () {
      $this = jQuery(this);
      $this.toggle($this.data('address-id') != xpcBillingAddressId);
    }
  );
}