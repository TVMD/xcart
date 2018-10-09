/* vim: set ts=4 sw=4 sts=4 et: */

/**
 * Braintree widget 
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

var braintreePayment = {

    /**
     * Client authorization from the server
     */
    token: '',

    /**
     * Merchant ID
     */
    merchantId: '',

    /**
     * Test mode flag
     */
    isTestMode: false,

    /**
     * 3-D Secure flag
     */
    is3dSecure: false,

    /**
     * 3-D Secure for not supported cards flag
     */
    isAcceptNo3dSecure: false,

    /**
     * Error message for the failed 3-D Secure
     */
    acceptNo3dSecureError: '3-D Secure failed',

    /**
     * 3-D Secure for the vaulted cards
     */
    is3dSecureForVault: false,

    /**
     * PayPal flag
     */
    isPayPal: false,

    /**
     * Flag indicating is it a PayPal express checkout button or complete braintree component
     */
    isButton: false,

    /**
     * PayPal button rendering attempts
     */
    paypalButtonRenderingAttempts: 0,

    /**
     * Maximum PayPal button rendering attempts
     */
    maxPaypalButtonRenderingAttempts: 100,

    /**
     * Kount merchant ID
     */
    kountMerchantId: '',

    /**
     * Payment method nonce
     */
    _nonce: '',
    get nonce() {
        return this._nonce;
    },
    set nonce(value) {
        this._nonce = value;
        this.log('Set nonce: ' + value);
        if (this.nonceElement) {
            this.nonceElement.value = value;
            this.log(this.nonceElement);
        }
    },

    /**
     * Payment method nonce element
     */
    nonceElement: null,

    /**
     * Form element
     */
    formElement: null,

    /**
     * Braintree client instance
     */
    client: null,

    /**
     * Braintree hosted fields instance
     */
    hostedFields: null,

    /**
     * Braintree PayPal instance
     */
    paypal: null,

    /**
     * Braintree PayPal Checkout instance
     */
    paypalCheckout: null,

    /**
     * Braintree 3-D Secure instance
     */
    secure3d: null,

    /**
     * Credit card number selector
     */
    numberSelector: '',

    /**
     * Credit card number placeholder
     */
    numberPlaceholder: '',

    /**
     * CVV selector
     */
    cvvSelector: '',

    /**
     * CVV placeholder
     */
    cvvPlaceholder: '',

    /**
     * Expiration date selector
     */
    dateSelector: '',

    /**
     * Expiration date placeholder
     */
    datePlaceholder: '',

    /**
     * PayPal buttons DOM id's
     */
    paypalButtons: {},

    /**
     * PayPal button style
     */
    paypalButtonStyle: {},

    /**
     * Flag indicating braintree is initialized
     */
    isInitialized: false,

    /**
     * Flag indicating something is in progress 
     */
    _isInProgress: false,
    get isInProgress() {
        return this._isInProgress;
    },
    set isInProgress(value) {
        this._isInProgress = value;
        this.checkout.processShadows();
    },

    /**
     * Flag indicating something is loading
     */
    _isLoading: false,
    get isLoading() {
        return this._isLoading;
    },
    set isLoading(value) {
        this._isLoading = value;
        this.checkout.processShadows();
    },

    /**
     * Credit card form fields
     */
    fields: {},

    /**
     * Credit card form CSS styles
     */
    styles: {},

    /**
     * Trigger error
     */
    triggerError: function triggerError(e) {
        console.error(e);

        if (typeof e === 'string' || e instanceof String) {
            var message = e;
        } else if ('undefined' != typeof e.message) {
            var message = e.message;
        } else {
            var message = 'Unknown Braintree error';
        }

        this.nonce = '';

        this.checkout.triggerError(message);

        this.isInProgress = false;
        this.isLoading = false;
        if (this.isFlc()) {
            Checkout.instance.$root.finishLoadAnimation();
        }
    },

    /**
     * Log something to console
     */
    log: function log(data) {
        if (core.isDeveloperMode) {
            console.log(data);
        }
    },

    /**
     * Check if Braintree is the current method
     */
    isCurrent: function isCurrent(includeSavedCards) {
        return this.checkout.isCurrent(includeSavedCards);
    },

    /**
     * Check if it is Fastlane checkout
     */
    isFlc: function isFlc() {
        return jQuery('.checkout_fastlane_container').length > 0;
    },

    /**
     * Create Braintree 3-D Secure instance callback
     */
    create3DSecureCallback: function create3DSecureCallback(error, instance) {
        if (error) {
            return this.triggerError(error);
        }

        this.secure3d = instance;

        this.checkout.create3DSecureCallback(instance);

        this.isInProgress = false;
        this.isInitialized = true;

        this.log('Braintree payment initialized');
    },

    /**
     * Add 3-D secure iframe callback
     */
    addFrameCallback: function addFrameCallback(error, iframe) {
        if (error) {
            return this.triggerError(error);
        }

        this.checkout.addFrameCallback(iframe);

        this.isInProgress = false;
    },

    /**
     * Remove 3-D secure iframe callback
     */
    removeFrameCallback: function removeFrameCallback() {
        if ('function' == typeof this.checkout.removeFrameCallback) {
            this.checkout.removeFrameCallback();
        }
    },

    /**
     * Verify card via 3-D Secure
     */
    verifyCard: function verifyCard(options) {
        if ('undefined' != options.nonce && options.nonce) {
            this.nonce = options.nonce;
        }

        var options = {
            amount: options.total,
            nonce: this.nonce,
            addFrame: this.addFrameCallback.bind(this),
            removeFrame: this.removeFrameCallback.bind(this)
        };

        this.secure3d.verifyCard(options, this.verifyCardCallback.bind(this));
    },

    /**
     * 3-D Secure verify card callback
     */
    verifyCardCallback: function verifyCardCallback(error, response) {
        if (error) {
            return this.triggerError(error);
        }

        if ('undefined' != typeof response.verificationDetails && response.verificationDetails.liabilityShiftPossible == false && response.verificationDetails.liabilityShifted == false && this.isAcceptNo3dSecure == false) {
            return this.triggerError(this.acceptNo3dSecureError);
        }

        this.checkout.verifyCardCallback(response);

        this.nonce = response.nonce;

        this.isInProgress = false;
        jQuery(this.formElement).submit();
    },

    /**
     * Create Braintree hosted fields instance callback
     */
    createHostedFieldsCallback: function createHostedFieldsCallback(error, instance) {
        if (error) {
            return this.triggerError(error);
        }

        // Clear nonce
        this.nonce = '';

        // Form submitter
        var submitEvent = 'submit';
        if (this.isFlc()) {
            submitEvent = 'beforeSubmit';
        }

        jQuery(this.formElement).bind(submitEvent, this.submitForm.bind(this));

        this.hostedFields = instance;

        this.checkout.createHostedFieldsCallback(instance);

        if (this.is3dSecure) {
            braintree.threeDSecure.create({ client: this.client }, this.create3DSecureCallback.bind(this));
        } else {
            this.isInProgress = false;
            this.isInitialized = true;

            this.log('Braintree payment initialized');
        }
    },

    /**
     * Get options for the Hosted Fields initialization 
     */
    getHostedFieldsOptions: function getHostedFieldsOptions() {
        return {
            client: this.client,
            styles: this.styles,
            fields: this.fields
        };
    },

    /**
     * PayPal button payment
     */
    paypalButtonPayment: function paypalButtonPayment() {
        var _this = this;

        return new Promise(function (resolve, reject) {
            _this.checkout.getPayPalData(function (options) {
                resolve(_this.paypalCheckout.createPayment(options));
            });
        });
    },

    /**
     * Callback for get PayPal data
     */
    getPayPalDataCallback: function getPayPalDataCallback(options) {
        return this.paypalCheckout.createPayment(options);
    },

    /**
     * PayPal button Authorize action
     */
    paypalButtonOnAuthorize: function paypalButtonOnAuthorize(data, actions) {
        return this.paypalCheckout.tokenizePayment(data).then(this.paypalButtonOnAuthorizeThen.bind(this));
    },

    /**
     * Then for PayPal button Authorize action
     */
    paypalButtonOnAuthorizeThen: function paypalButtonOnAuthorizeThen(payload) {
        this.nonce = payload.nonce;

        this.isInProgress = false;

        if (!this.isButton) {

            // Submit order
            jQuery(this.formElement).submit();
        } else {

            // Proceed to checkout
            this.checkout.continuePayPal(payload.details);
        }
    },

    /**
     * PayPal button Cancel action
     */
    paypalButtonOnCancel: function paypalButtonOnCancel(data) {
        this.log(data);
    },

    /**
     * Create PayPal Checkout calback
     */
    createPayPalCheckoutCallback: function createPayPalCheckoutCallback(error, instance) {
        if (!this.isButton) {
            // Regardless of the error create hosted fields
            braintree.hostedFields.create(this.getHostedFieldsOptions(), this.createHostedFieldsCallback.bind(this));
        }

        if (error) {
            return this.triggerError(error);
        }

        this.paypalCheckout = instance;

        setTimeout(this.renderPayPalButtons.bind(this), 1000);
    },

    /**
     * Render PayPal buttons
     */
    renderPayPalButtons: function renderPayPalButtons() {

        if ('undefined' == typeof paypal || 'undefined' == typeof paypal.Button) {

            if (this.maxPaypalButtonRenderingAttempts > this.paypalButtonRenderingAttempts) {
                this.paypalButtonRenderingAttempts++;
                setTimeout(this.renderPayPalButtons.bind(this), 1000);
            }

            return;
        }

        var options = {
            env: this.isTestMode ? 'sandbox' : 'production',
            commit: !this.isButton,
            payment: this.paypalButtonPayment.bind(this),
            onAuthorize: this.paypalButtonOnAuthorize.bind(this),
            onCancel: this.paypalButtonOnCancel.bind(this),
            onError: this.triggerError.bind(this),
            style: this.paypalButtonStyle
        };

        for (var i in this.paypalButtons) {

            paypal.Button.render(options, this.paypalButtons[i]).then(function () {
                // The PayPal button will be rendered in an html element with the id
                // `paypal-button`. This function will be called when the PayPal button
                // is set up and ready to be used.
            });

            if (this.isButton) {
                this.isInProgress = false;
            }
        }
    },

    /**
     * Create PayPal calback
     */
    createPayPalCallback: function createPayPalCallback(error, instance) {
        if (error) {

            if (!this.isButton) {
                // Regardless of the error create hosted fields
                braintree.hostedFields.create(this.getHostedFieldsOptions(), this.createHostedFieldsCallback.bind(this));
            }

            return this.triggerError(error);
        }

        this.paypal = instance;

        var options = {
            client: this.client
        };

        // Create a PayPal Checkout component
        braintree.paypalCheckout.create(options, this.createPayPalCheckoutCallback.bind(this));
    },

    /**
     * Create Braintree client instance callback
     */
    createClientCallback: function createClientCallback(error, instance) {
        if (error) {
            return this.triggerError(error);
        }

        this.client = instance;

        this.checkout.createClientCallback();

        if (this.isPayPal || this.isButton) {

            var options = {
                client: this.client
            };

            // Create PayPal. Hosted fields are created in callback if necessary 
            braintree.paypal.create(options, this.createPayPalCallback.bind(this));
        } else {

            braintree.hostedFields.create(this.getHostedFieldsOptions(), this.createHostedFieldsCallback.bind(this));
        }
    },

    /**
     * Tokenize card callback
     */
    tokenizeCallback: function tokenizeCallback(error, payload) {
        if (error) {
            return this.triggerError(error);
        }

        this.nonce = payload.nonce;

        this.checkout.tokenizeCallback(payload);

        if (this.is3dSecure && this.secure3d) {

            this.checkout.getCartTotal(this.verifyCard.bind(this));
        } else {

            this.isInProgress = false;
            jQuery(this.formElement).submit();
        }
    },

    /**
     * Form submitter
     */
    submitForm: function submitForm(event) {
        var allow = true;

        if (this.isInitialized && this.isCurrent(true) && 'undefined' != typeof braintree) {

            // This is one of the Braintree payment methods

            if (this.isInProgress) {

                // Form is being submitted, do nothing
                allow = false;
                event.preventDefault();
            } else if (this.nonce == '') {

                if (this.isCurrent(false)) {

                    // This is credit card payment
                    this.isInProgress = true;
                    allow = false;
                    event.preventDefault();
                    this.hostedFields.tokenize(this.tokenizeCallback.bind(this));
                } else {

                    // This is saved card payment
                    if (this.is3dSecureForVault && this.secure3d) {

                        // Process 3-D secure for the vault
                        this.isInProgress = true;
                        allow = false;
                        event.preventDefault();
                        this.checkout.getSavedCardNonce(this.verifyCard.bind(this));
                    }
                }

            } else {

                // For FLC, where values are copied before form submit
                $('input[name="payment_method_nonce"]', 'form.place').val(this.nonce);
            }

        }

        return allow;
    },

    /**
     * List of required properties
     */
    required: ['token', 'merchantId', 'nonceSelector', 'formSelector', 'numberSelector', 'cvvSelector', 'dateSelector'],

    /**
     * Init callback
     */
    initCallback: function initCallback(options) {
        // Copy options
        for (var i in options) {
            this[i] = options[i];
        }

        // Check options
        for (var i in this.required) {
            if (!this[this.required[i]]) {
                return this.triggerError('Empty field: ' + this.required[i]);
            }
        }

        this.nonceElement = document.querySelector(this.nonceSelector);
        this.formElement = document.querySelector(this.formSelector);

        if (!this.isButton) {

            // Details for the hosted fields
            this.fields = {
                'number': { selector: this.numberSelector, placeholder: this.numberPlaceholder },
                'cvv': { selector: this.cvvSelector, placeholder: this.cvvPlaceholder },
                'expirationDate': { selector: this.dateSelector, placeholder: this.datePlaceholder }
            };
        }

        var clientOptions = {
            authorization: this.token
        };

        braintree.client.create(clientOptions, this.createClientCallback.bind(this));
    },

    /**
     * Constructor/initializator
     */
    init: function init(counter) {

        if ('number' != typeof counter) {
            counter = 1;
        }

        this.log('Braintree payment initialization started. Attempt: ' + counter);

        if (!this.isCurrent()) {
            this.log('Braintree is not current payment method');
            this.teardown();
            return;
        }

        this.isLoading = true;

        if (
            'undefined' == typeof braintree
            || this.isPayPal && 'undefined' == typeof braintree.paypal
            || this.is3dSecure && 'undefined' == typeof braintree.threeDSecure
        ) {

            if (20 > counter) {
                this.log('Waiting for Braintree lib');
                setTimeout(this.init.bind(this, ++counter), 500);
            } else {
                this.triggerError('Unable to load Braintree lib');
            }

            return;
        }

        this.isLoading = false;

        if (this.isInitialized) {
            this.log('Braintree is already initialized');
            return
        };

        if (this.isInProgress) {
            this.log('Braintree initialization in progress');
            return
        };

        this.isInProgress = true;

        this.checkout.init(this.initCallback.bind(this));
    },

    /**
     * Destructor
     */
    teardown: function() {

        this.log('Braintree payment teardown');

        try {
            this.client.teardown();
            this.hostedFields.teardown();
            this.paypal.teardown();
            this.paypalCheckout.teardown();
            this.secure3d.teardown();
        } catch (err) {
            // Do nothing. Apparenty somethng was not defined
        }

        this.isInitialized = false;
        this.isInProgress = false;
        this.isLoading = false;
    },

    /**
     * Some external methods which shoudld be processed by the store checkout page
     */
    checkout: {
        init: function init(callback) {
            callback();
        }, // @param callback Callback function 
        triggerError: function triggerError(message) {}, // @param message Error message
        create3DSecureCallback: function create3DSecureCallback() {}, // @param instance 3-D Secure object instance
        addFrameCallback: function addFrameCallback(iframe) {}, // @param iframe Iframe element
        verifyCardCallback: function verifyCardCallback(response) {}, // @param response Braintree response of card verification
        createHostedFieldsCallback: function createHostedFieldsCallback() {},
        createClientCallback: function createClientCallback() {},
        tokenizeCallback: function tokenizeCallback(payload) {}, // @param payload Braintree payload with card tokenization nonce
        getCartTotal: function getCartTotal(callback) {
            callback();
        }, // @param callback Callback function
        getSavedCardNonce: function getSavedCardNonce(callback) {
            callback();
        }, // @param callback Callback function
        getPayPalData: function getPayPalData(callback) {
            callback();
        }, // @param callback Callback function
        continuePayPal: function continuePayPal(details) {}, // @param details Some details from PayPal
        processShadows: function processShadows() {},
        isCurrent: function isCurrent() {
            return false;
        }
    }
};
