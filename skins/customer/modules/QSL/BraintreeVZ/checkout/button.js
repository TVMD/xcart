/* vim: set ts=4 sw=4 sts=4 et: */

/**
 * Braintree widget for PayPal button
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

        return params;
    };

    /**
     * Check if Braintree is the current payment method
     */
    braintreePayment.checkout.isCurrent = function (includeSavedCards) {
        return true;
    };

    /**
     * List of PayPal buttons
     */
    $('[id^=braintree-paypal-button-').each(function (i) {
        braintreePayment.paypalButtons[i] = '#' + this.id;
    });

    /**
     * Constructor/initializator
     */
    braintreePayment.checkout.init = function (callback) {
        var params = {
            target:   'braintree',
            action:   'get_braintree_data',
            is_button: true
        };

        var url = URLHandler.buildURL(this.getUrlParams(params));

        core.get(url, function (response) {
            callback.bind(braintreePayment, response.responseJSON)();
        });
    };

    /**
     * Process shadows
     */
    braintreePayment.checkout.processShadows = function () {
        var elm = $('#cart-right');

        if (!elm.length) {
            return;
        }

        if (braintreePayment.isInProgress || braintreePayment.isLoading) {
            assignWaitOverlay(elm);
        } else {
            unassignWaitOverlay(elm);
            $('.wait-block-overlay', '#cart-right').remove(); // Otherwise doesn't work
        }
    };

    /**
     * Get data for the PayPal payment
     */
    braintreePayment.checkout.getPayPalData = function (callback) {
        var params = this.getUrlParams({
            target: 'braintree',
            action: 'get_paypal_data'
        });        

        var url = URLHandler.buildURL(this.getUrlParams(params));

        core.get(url, function (response) {
            callback.bind(braintreePayment, response.responseJSON)();
        });
    };

    /**
     * Proceed to the checkout
     */
    braintreePayment.checkout.continuePayPal = function (details) {
        var params = this.getUrlParams({
            target: 'checkout',
            action: 'continue_paypal'
        });

        var url = URLHandler.buildURL(params);

        var form = $('<form method="post" action="' + url + '"></form>');

        $('<input>').attr('type', 'hidden').attr('name', 'nonce').val(braintreePayment.nonce).appendTo(form);
        $('<input>').attr('type', 'hidden').attr('name', 'details').val(JSON.stringify(details)).appendTo(form);

        form.appendTo('body').submit();
    };

    braintreePayment.init();
});
