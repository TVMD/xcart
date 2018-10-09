<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\CDev\UserPermissions\Module;

/**
 * Module
 */
abstract class AModule extends \XLite\Module\AModuleAbstract implements \XLite\Base\IDecorator
{
    /**
     * @inheritdoc
     */
    protected static function registerPermission($permissionCode, $permissionName)
    {
        parent::registerPermission($permissionCode, $permissionName);

        $repo = \XLite\Core\Database::getRepo('XLite\Model\Role\Permission');
        $permission = $repo->findOneByCode($permissionCode);

        if ($permission) {
            $repo->update($permission, ['enabled' => true], false);
        }
    }

    /**
     * @inheritdoc
     */
    protected static function unregisterPermission($permissionCode)
    {
        parent::unregisterPermission($permissionCode);

        $repo = \XLite\Core\Database::getRepo('XLite\Model\Role\Permission');
        $permission = $repo->findOneByCode($permissionCode);

        if ($permission) {
            $repo->update($permission, ['enabled' => false], false);
        }
    }
}
