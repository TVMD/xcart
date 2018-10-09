/* vim: set ts=2 sw=2 sts=2 et: */

/**
 * JSTree initializer
 *
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

var TreeView = function (container, jstreeOptions) {

    if (!container) {
        return false;
    }

    this.container = jQuery(container).eq(0);

    if (!this.container.length) {
        return false;
    }

    this.preventEdit = false;

    this.mount(jstreeOptions);
    this.container.get(0).TreeViewController = this;
};

TreeView.prototype.mount = function(options) {
    options = options || this.lastOptions || {};
    this.lastOptions = options;
    this.container.jstree(options);
    this.container.removeClass('not-processed');
};

TreeView.prototype.destroy = function(clearState) {
    clearState = clearState || false;

    if (clearState) {
        this.container.jstree(true).clear_state();
    }

    this.container.addClass('not-processed');
    this.container.jstree(true).destroy();
};

TreeView.prototype.callMethod = function (methodName, args) {
    if (this.container.length) {
        this.container.jstree.apply(this.container, arguments);
    }
};

TreeView.prototype.selectTemplate = function (id, preventEdit) {
    this.callMethod('deselect_all');
    this.callMethod('close_all');
    this.preventEdit = !!preventEdit;
    this.callMethod('select_node', 'template_' + id, true);
    this.preventEdit = false;

    var top = jQuery('.jstree-anchor.jstree-clicked').get(0).offsetTop;
    var left = jQuery('.jstree-anchor.jstree-clicked').get(0).offsetLeft;

    this.container.get(0).scrollTop = top - 30;
    this.container.get(0).scrollLeft = left - 30;
};