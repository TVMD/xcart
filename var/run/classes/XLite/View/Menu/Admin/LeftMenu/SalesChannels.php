<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\Menu\Admin\LeftMenu;

use XLite\Core\Auth;
use XLite\Model\Role\Permission;

/**
 * Sales channels node
 */
class SalesChannels extends \XLite\View\Menu\Admin\LeftMenu\Node
{
    /**
     * @return \XLite\View\AView
     */
    protected function getActionWidget()
    {
        return $this->getWidget([], 'XLite\View\Button\Menu\SalesChannels');
    }

    /**
     * Check ACL permissions
     *
     * @return boolean
     */
    protected function checkACL()
    {
        return parent::checkACL() && Auth::getInstance()->isPermissionAllowed(Permission::ROOT_ACCESS);
    }
}
