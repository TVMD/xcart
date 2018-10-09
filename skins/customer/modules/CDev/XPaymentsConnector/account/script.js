/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * Add new card and saved cards script 
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

jQuery(function () {

  if (typeof(window['slidebar']) == 'function' && jQuery.mmenu) {
    core.bind('mm-menu.created', initXpcIframe);
  } else {
    initXpcIframe();
  }

  jQuery('#submit-button').click(function () {

    shadeIframe();

    var message = {
      message: 'submitPaymentForm',
      params:  {}
    };

    var iframe = jQuery('#add_new_card_iframe').get(0);

    if (window.postMessage && window.JSON) {
      iframe.contentWindow.postMessage(JSON.stringify(message), '*');
    }
  });

  jQuery(window).on('message', function(event) {
    var msg = getXpcIframeEventDataObject(event);

    if (!checkXpcIframeMessage(msg)) {
      return;
    }

    if ('showMessage' == msg.message) {
      var url = URLHandler.buildURL({ 'target': 'xpc_popup', 'type': XPC_IFRAME_DO_NOTHING, 'message': escape(msg.params.text) });
      popup.load(url);
      return;
    }

    if ('ready' == msg.message) {
      unshadeIframe();
    }

    var type = parseInt(msg.params.type);
    var message = msg.params.error;

    var height = msg.params.height;

    if (parseInt(height)) {
        jQuery('#add_new_card_iframe').css('height', parseInt(height) + 10 + 'px');
    }

    if (message
      && XPC_IFRAME_DO_NOTHING != type
    ) {
      if (XPC_IFRAME_TOP_MESSAGE == type) {
        core.trigger('message', { 'message': message, 'type': MESSAGE_ERROR });

      } else {
        jQuery('#add_new_card_iframe_container').hide();

        var url = URLHandler.buildURL({ 'target': 'xpc_popup', 'type': type, 'message': escape(message) });

        popup.load(url);
      }
    }
  });
});

function shadeIframe()
{
  assignWaitOverlay($('#content'));
}

function unshadeIframe()
{
  unassignWaitOverlay($('#content'));
}

function initXpcIframe()
{
  console.log('Loading X-Payments iframe...');
  var iframe = jQuery('iframe#add_new_card_iframe');
  if (iframe.length) {
    shadeIframe();
    iframe.attr('src', iframe.data('src'));
  }
}
