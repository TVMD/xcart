/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * order.js
 *
 * Copyright (c) 2001-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

define('themetweaker/store/inline_editor', [], function(){
    var recalculateIsChanged = function(state) {
        return !_.isEmpty(state.changeset) || !_.isEmpty(state.images);
    };

    return {
        state: {
            changeset: {},
            images: {},
            isChanged: false,
        },

        mutations: {
            INLINE_EDITOR_UPDATE_CHANGESET: function (state, key, value) {
                var updated = {};
                updated[key] = value;
                state.changeset = _.extend(state.changeset, updated);
                state.isChanged = recalculateIsChanged(state);
            },

            INLINE_EDITOR_CLEAR_CHANGESET: function (state) {
                state.changeset = {};
                state.isChanged = recalculateIsChanged(state);
            },

            INLINE_EDITOR_UPDATE_IMAGES: function (state, key, value) {
                var updated = {};
                updated[key] = value;
                state.images = _.extend(state.images, updated);
                state.isChanged = recalculateIsChanged(state);
            },

            INLINE_EDITOR_CLEAR_IMAGES: function (state) {
                state.images = {};
                state.isChanged = recalculateIsChanged(state);
            }
        }
    }
});
