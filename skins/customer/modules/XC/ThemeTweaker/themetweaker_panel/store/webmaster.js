/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * order.js
 *
 * Copyright (c) 2001-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('themetweaker/store/webmaster', [], function(){
    return {
        state: {
            originalState: null,
            currentState: null,
            isChanged: false,
        },

        mutations: {
            WEBMASTER_MODE_UPDATE_STATE: function (state, value, updateOriginal) {
                if (state.originalState === null || updateOriginal) {
                    state.originalState = value;
                }

                state.currentState = value;
                state.isChanged = (state.currentState !== state.originalState);
            },
        }
    }
});
