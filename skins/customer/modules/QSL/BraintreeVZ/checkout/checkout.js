/* vim: set ts=4 sw=4 sts=4 et: */

/**
 * Braintree widget for checkout (common for OPC and FLC) 
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

core.bind('load', function () {

    /**
     * Trigger error
     */
    braintreePayment.checkout.triggerError = function (message) {
        core.trigger('message', { 'message': message, 'type': MESSAGE_ERROR });
    };

    /**
     * Get URL params for AJAX request
     */
    braintreePayment.checkout.getUrlParams = function (params) {
        params[xliteConfig.form_id_name] = xliteConfig.form_id;
        params['target'] = 'braintree';

        return params;
    };

    /**
     * Check if Braintree is the current payment method
     */
    braintreePayment.checkout.isCurrent = function (includeSavedCards) {
        var currentPaymentId = $('input[name=methodId][id^=pmethod]:checked:visible').val();

        if (
           'undefined' == typeof currentPaymentId
            && 'undefined' != typeof Checkout
            && 'undefined' != typeof Checkout.instance
        ) {
            // For FLC
            currentPaymentId = Checkout.instance.getState().order.payment_method;
        }

        var braintreePaymentId = $('#braintree-payment-id').val();

        var isCurrent = currentPaymentId == braintreePaymentId
            && 'undefined' != typeof braintreePaymentId;

        if ('undefined' == typeof includeSavedCards || !includeSavedCards) {
            isCurrent = isCurrent && !$('#braintree-saved-cards:visible').length;
        }

        return isCurrent;
    };

    /**
     * List of PayPal buttons
     */
    braintreePayment.paypalButtons = ['#braintree-paypal-button'];

    /**
     * Constructor/initializator
     */
    braintreePayment.checkout.init = function (callback) {
        var url = URLHandler.buildURL(this.getUrlParams( {action: 'get_braintree_data'} ));

        core.get(url, function (response) {
            callback.bind(braintreePayment, response.responseJSON)();
        });
    };

    /**
     * Get cart total
     */
    braintreePayment.checkout.getCartTotal = function (callback) {
        var url = URLHandler.buildURL(this.getUrlParams( {action: 'get_cart_total'} ));

        core.get(url, function (response) {
            callback.bind(braintreePayment, response.responseJSON)();
        });
    };

    /**
     * Get saved card nonce
     */
    braintreePayment.checkout.getSavedCardNonce = function (callback) {
        var token = '';

        if ($('[name=saved_card_token]:checked').length) {
            token = $('[name=saved_card_token]:checked').val();
        }

        var params = this.getUrlParams({
            action: 'get_saved_card_nonce',
            token:  token
        });

        var url = URLHandler.buildURL(params);

        core.get(url, function (response) {
            callback.bind(braintreePayment, response.responseJSON)();
        });
    };

    /**
     * Get data for the PayPal payment
     */
    braintreePayment.checkout.getPayPalData = function (callback) {
        var url = URLHandler.buildURL(this.getUrlParams( {action: 'get_paypal_data'} ));

        core.get(url, function (response) {
            callback.bind(braintreePayment, response.responseJSON)();
        });
    };

    /**
     * Add 3-D secure iframe callback
     */
    braintreePayment.checkout.addFrameCallback = function (iframe) {
        var div = $('<div></div>').css('min-width', '400px').css('min-height', '400px').html(iframe);

        popup.open(div);
    };

    /**
     * Remove 3-D secure iframe callback
     */
    braintreePayment.checkout.removeFrameCallback = function (iframe) {
        popup.close();
    };

    /**
     * Process shadows
     */
    braintreePayment.checkout.processShadows = function () {
        var elm = $('.steps').length ? '.steps' : '.checkout_fastlane_container';
        var $elm = $(elm);

        if (braintreePayment.isInProgress || braintreePayment.isLoading) {
            if ($elm.length) {
                assignWaitOverlay($elm);
            }
        } else {
            if ($elm.length) {
                unassignWaitOverlay($elm);
                $('.wait-block-overlay', elm).remove(); // Otherwise doesn't work
            }
            if (jQuery('.steps').get(0)) {
                jQuery('.steps').get(0).loadable.unshade(); // Unshade checkout
            }
            jQuery('.place-order').removeClass('submitted'); // And re-activate place order button
        }
    };
});
