/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * X-Payments iframe and checkout
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

var xpcLoading = false;
var xpcPopupError = false;
var xpcPrevPaymentId = 0;

function xpcMessageListener(event)
{

  if (typeof event.originalEvent == 'undefined') {
    event.originalEvent = event;
  }

  var msg = getXpcIframeEventDataObject(event);

  if (!checkXpcIframeMessage(msg)) {
    return;
  }

  if ('paymentFormSubmit' == msg.message) {
    core.trigger('checkout.common.ready', event);
    return;
  }

  if ('showMessage' == msg.message) {
    var url = URLHandler.buildURL({ 'target': 'xpc_popup', 'type': XPC_IFRAME_DO_NOTHING, 'message': escape(msg.params.text) });
    popup.load(url);
    return;
  }

  if (msg.params.height) {
    jQuery("#xpc").css('height', msg.params.height);
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
    }
  }
  if (msg.params.returnURL) {

    jQuery(location).attr('href', msg.params.returnURL);

  } else {
    xpcLoading = false;
    jQuery('.save-card-box').show();
    Checkout.instance.finishLoadAnimation();
    core.trigger('checkout.common.unblock');
    core.trigger('checkout.common.anyChange');
  }

};

function isXpcIframeMethod()
{
  var result = false;

  var paymentId = Checkout.instance.getState().order.payment_method;

  if (
      typeof xpcPaymentIds != 'undefined'
      && xpcPaymentIds
      && xpcPaymentIds[paymentId]
      && xpcUseIframe
  ) {
    result = true;
  }

  return result;

}

function isXpcSavedCardMethod()
{
  var result = false;

  var paymentId = Checkout.instance.getState().order.payment_method;

  if (
      typeof xpcPaymentIds != 'undefined'
      && paymentId == xpcSavedCardPaymentId 
  ) {
    result = true;
  }

  return result;
}

function submitXpcIframe(event, state)
{
  if (
    !isXpcIframeMethod()
    || xpcLoading
  ) {
    return false;
  }

  state.state = false;

  if (jQuery('.xpc_iframe').length) {
    saveCheckoutFormDataXpc('#order_note', '#save-card');

    setTimeout(Checkout.instance.startLoadAnimation, 0);
    core.trigger('checkout.common.block');
    jQuery('#status-messages').hide();

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

}

function reloadXpcIframe()
{

  if (
    typeof Checkout.instance == 'undefined'
    || !isXpcIframeMethod()
  ) {
    return false;
  }

  var paymentId = Checkout.instance.getState().order.payment_method;

  var iframeSelector = (paymentId) ? '#xpc_iframe_' + paymentId : '.xpc_iframe';

  var iframe = jQuery(iframeSelector + ':visible');

  if (iframe.length == 0) {
    // Iframe not found or not visible
    return;
  }
  var src = iframe.attr('src');

  if (!src) {
    src = iframe.data('src');
  }

  console.log('Loading X-Payments iframe...');
  iframe.attr('src', src);

  xpcLoading = true;
  Checkout.instance.startLoadAnimation();
  core.trigger('checkout.common.block');

}

// Bind listener for messages from iframe
jQuery(window).bind('message', _.bind(xpcMessageListener, this));

// Reload iframe if payment method is changed
core.bind('checkout.paymentTpl.loaded', reloadXpcIframe);

core.bind('checkout.xpc.paymentPage.loaded', function() {
  var paymentId = Checkout.instance.getState().order.payment_method;
  if (xpcPrevPaymentId != paymentId) {
    xpcPrevPaymentId = paymentId;
    reloadXpcIframe();
  }
});

// Redefines submit action
core.bind('checkout.common.ready', submitXpcIframe);

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
  'fastlane_section_switched',
  function(event, data) {
    // Hide any popovers when changing section
    hideAddressPopovers();

    // Load iframe only when payment page is opened
    if (
        !_.isUndefined(data['newSection'])
        && null !== data['newSection']
        && 'payment' == data['newSection']['name']
    ) {
      // Timeout is required to place function in queue and execute after page content is displayed
      setTimeout(function (event, data) { core.trigger('checkout.xpc.paymentPage.loaded'); }, 0);
    }
  }
);

core.bind('checkout.paymentTpl.loaded', initAddressPopovers);

core.bind('checkout.xpc.paymentPage.loaded', function() { showAddressPopover(); });

define(
  'xpayments/checkout_fastlane/blocks/payment_methods',
 ['checkout_fastlane/blocks/payment_methods',
  'checkout_fastlane/sections/payment'],
  function (PaymentMethods, PaymentSection) {

  var parent_loadable_loader = PaymentMethods.options.loadable.loader; 

  var PaymentMethods = PaymentMethods.extend({
    ready: function() {
      if (
        Checkout.instance
        && Checkout.instance.getState().sections.current.name == 'payment'
      ) {
        showAddressPopover();
      }
    },
    events: {
      global_updatecart: function(data) {
        // If new billing address is set then reload payment section
        // for correct Saved cards address popovers operation
        if (isXpcSavedCardMethod()) {
          var triggerKeys = ['billingAddressFields', 'billingAddressId'];
          var needsUpdate = _.some(triggerKeys, function(key) {
            return _.has(data, key);
          });
          if (needsUpdate) {
            xpcBillingAddressId = data.billingAddressId;
            this.$reload();
          }
        }
      },
    },
    loadable: _.extend(PaymentMethods.options.loadable, {
      loader: function() {
        // Hide Address popovers when payment method changed or section reloaded
        hideAddressPopovers();
        return parent_loadable_loader.apply(this, arguments);
      },
    }),
  });

  Vue.registerComponent(PaymentSection, PaymentMethods);

  return PaymentMethods;
});
