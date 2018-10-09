/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * order.js
 *
 * Copyright (c) 2001-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('themetweaker/store/layout_editor', [], function(){
    return {
        state: {
            changeset: {},
            isChanged: false,
        },

        mutations: {
            LAYOUT_EDITOR_UPDATE_CHANGESET: function (state, key, value) {
                var updated = {};
                updated[key] = value;
                state.changeset = _.extend(state.changeset, updated);
                state.isChanged = !_.isEmpty(updated);
            },

            LAYOUT_EDITOR_CLEAR_CHANGESET: function (state) {
                state.changeset = {};
                state.isChanged = false;
            }
        }
    }
});
