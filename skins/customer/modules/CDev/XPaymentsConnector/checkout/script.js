/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * X-Payments iframe and checkout
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

var xpcLoading = false;
var xpcPopupError = false;
var xpcTimeoutTimer = false;

decorate(
  'CheckoutView',
  'postprocess',
  function(isSuccess, initial)
  {
    arguments.callee.previousMethod.apply(this, arguments);

    if (isSuccess) {
      jQuery(window).bind('message', _.bind(this.messageListener, this));

      jQuery('form.place').submit(
        _.bind(
          function() {

            if (jQuery('.xpc_iframe').length && !this.base.find('form.place').hasClass('allowed')) {
              saveCheckoutFormDataXpc('#place_order_note', '#save-card');

              var message = {
                message: 'submitPaymentForm',
                params:  {}
              };
              var xpcShown = jQuery('.xpc_iframe').get(0);
              if (window.postMessage && window.JSON) {
                xpcShown.contentWindow.postMessage(JSON.stringify(message), '*');
              }

              return false;
            }
          },
          this
        )
      );
    }
  }
);

CheckoutView.prototype.messageListener = function (event)
{
  var msg = getXpcIframeEventDataObject(event);

  if (!checkXpcIframeMessage(msg)) {
    return;
  }

  clearTimeout(xpcTimeoutTimer);
  xpcLoading = false;
  unassignWaitOverlay(jQuery('#xpc'));

  if ('paymentFormSubmit' == msg.message) {
    jQuery('.place-order').click();
    return;
  }

  if ('showMessage' == msg.message) {
    var url = URLHandler.buildURL({ 'target': 'xpc_popup', 'type': XPC_IFRAME_DO_NOTHING, 'message': escape(msg.params.text) });
    popup.load(url);
    return;
  }

  if (msg.params.height) {
    jQuery('#xpc').css('height', msg.params.height);
  }

  var type = parseInt(msg.params.type);
  var message = msg.params.error;

  if (
    message 
    && XPC_IFRAME_DO_NOTHING != type
  ) {

    if (XPC_IFRAME_TOP_MESSAGE == type) {

      core.trigger('message', { 'message': message, 'type': MESSAGE_ERROR });

    } else {

      if (
        XPC_IFRAME_CHANGE_METHOD == type
        || XPC_IFRAME_CLEAR_INIT_DATA == type
        || XPC_IFRAME_ALERT == type
      ) {
        xpcPopupError = true;
      }

      var url = URLHandler.buildURL({ 'target': 'xpc_popup', 'type': type, 'message': escape(message) }); 

      popup.load(url);

      this.triggerVent('xpc.error', { 'widget': this, 'error': message, 'type': type });
    }
  }

  if (msg.params.returnURL) {

    this.base.find('form.place').addClass('allowed').get(0).setAttribute('action', msg.params.returnURL);
    this.base.find('form.place input[name="action"]').val('return');
    this.base.find('.place-order').removeClass('disabled').removeClass('submitted').click().addClass('submitted');

    this.triggerVent('xpc.redirect', {widget: this});

    jQuery('form.place').submit();

  } else {

    jQuery('.save-card-box').show();
    jQuery('.steps').get(0).loadable.unshade();
    jQuery('.cart-items').get(0).loadable.unshade();
    jQuery('.step-payment-methods').get(0).loadable.unshade();
    core.trigger('checkout.common.anyChange');

    this.triggerVent('xpc.unshade', {widget: this});

    this.base.find('.place-order').removeClass('submitted');
  }
};

core.bind(
  'load',
  function() {

    decorate(
      'CartItemsView',
      'unshade',
      xpcUnshadeEventHandler
    );

    decorate(
      'PaymentMethodsView',
      'unshade',
      xpcUnshadeEventHandler
    );

    decorate(
      'PaymentMethodsView',
      'handleMethodChange',
      function(event) {
        clearTimeout(xpcTimeoutTimer);
        return arguments.callee.previousMethod.apply(this, arguments);
      }
    );

    decorate(
      'PlaceOrderButtonView',
      'checkState',
      function(supressErrors) {
        var preserveBlocked = this.blocked;
        this.blocked = !xpcIsUnshadeAllowed();

        var result = arguments.callee.previousMethod.apply(this, arguments);
        this.blocked = preserveBlocked;

        return result;
      }
    );

    decorate(
      'CartItemsView',
      'switchCards',
      function (isSuccess, initial) {
        jQuery('.saved-cards').children().each(
          function () {
            jQuery(this).removeClass('hidden');
          }
        );
        jQuery('.saved-cards').removeClass('single');
        jQuery('.switch-cards-link').hide();
      }
    );

    if (typeof(xpcPaymentIds) !== "undefined" && xpcPaymentIds[currentPaymentId]) {
      jQuery('.bright').addClass('disabled');
    }

    core.bind(
      'checkout.cartItems.postprocess',
      function(event, data) {
        if (typeof(xpcPaymentIds) !== "undefined" && xpcPaymentIds[currentPaymentId]) {

          if (jQuery('.save-card-box').length) {
            jQuery('.save-card-box').hide();

          } else {
            jQuery('.bright').addClass('disabled');
          }
        }

        showAddressPopover();
      }
    );

    core.bind(
      'checkout.paymentTpl.shade',
      function(event, state) {
        if (state.result && jQuery('.cart-items').get(0).loadable.isShowModalScreen) {
          state.result = false;
        }
      }
    );

    core.bind(
      'checkout.paymentTpl.postprocess',
      function(event, state) {
        reloadXpcIframe();
        initAddressPopovers();
        // Show popover for selected card (if required) after tpl load
        showAddressPopover();
      }
    );

    core.bind(
      'updateXpcIframe',
      function(event, data) {
        if (data.reloadIframe) {
          reloadXpcIframe();
        }
        // Backward compatibility "Save this card" box
        jQuery('.save-card-box, .save-card-box-no-iframe').toggle(data.showSaveCardBox);
      }
    );

    core.bind(
      'updateCart',
      function(event, data) {

        hideAddressPopovers();

        if (data.billingAddressId) {
          xpcBillingAddressId = data.billingAddressId;
        }

        if (data.paymentMethodId) {
          clearTimeout(xpcTimeoutTimer);
          currentPaymentId = data.paymentMethodId;
        }

        xpcLoading = false;

        if (
          data.paymentMethodId
          && xpcPaymentIds
          && xpcPaymentIds[data.paymentMethodId]
          && xpcUseIframe
        ) {
          xpcLoading = true;
          jQuery('.save-card-box').hide();
          jQuery('.cart-items').get(0).loadable.shade();
        }
      }
    );

    core.bind([
        'checkout.shippingAddress.submitted',
        'checkout.billingAddress.submitted'
      ],
      toggleCardAddressWarnings
    );

  }
);

function xpcIsUnshadeAllowed()
{
  return typeof(xpcPaymentIds) == 'undefined'
    || !currentPaymentId
    || !xpcPaymentIds[currentPaymentId]
    || !xpcUseIframe
    || !xpcLoading;
}

function xpcUnshadeEventHandler(isSuccess, initial)
{
  if (xpcIsUnshadeAllowed()) {
    arguments.callee.previousMethod.apply(this, arguments);
  }
}

function xpcLoadingTimeout()
{
  if (!xpcIsUnshadeAllowed()) {
    xpcPopupError = true;
    var url = URLHandler.buildURL({
      'target': 'xpc_popup',
      'type': XPC_IFRAME_CHANGE_METHOD,
      'message': 'Failed to load payment form.'
    });
    popup.load(url);
  }
}

function reloadXpcIframe()
{
  var iframe = jQuery((currentPaymentId) ? '#xpc_iframe_' + currentPaymentId : '.xpc_iframe');
  if (!iframe.length) {
    return;
  }

  var src = iframe.attr('src');
  if (!src) {
    src = iframe.data('src');
  }

  console.log('Loading X-Payments iframe...');

  xpcLoading = true;
  assignWaitOverlay(jQuery('#xpc'));

  clearTimeout(xpcTimeoutTimer);
  xpcTimeoutTimer = setTimeout(xpcLoadingTimeout, 15000);

  jQuery('#xpc').css('height', 'initial');
  iframe.attr('src', src);
}
