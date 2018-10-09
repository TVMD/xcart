<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\QSL\CloudSearch\Controller\Admin;

use XLite\Core\Config;
use XLite\Core\Database;
use XLite\Core\Request;
use XLite\Model\Module;
use XLite\Module\QSL\CloudSearch\Core\ServiceApiClient;
use XLite\Module\QSL\CloudSearch\Main;


/**
 * CloudSearch admin controller
 */
class CloudSearch extends \XLite\Controller\Admin\AAdmin
{
    /**
     * handleRequest
     *
     * @return void
     */
    public function handleRequest()
    {
        /** @var Module $module */
        $module = Database::getRepo('XLite\Model\Module')->findModuleByName('QSL\CloudSearch');

        $url = $this->buildURL('module', '', ['moduleId' => $module->getModuleID()]);

        $this->redirect($url);
    }
}