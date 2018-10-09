<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */


namespace XLite\Module\XC\NextPreviousProduct\Controller\Customer;


abstract class Search extends \XLite\Controller\Customer\Search implements \XLite\Base\IDecorator
{
    protected function doNoAction()
    {
        parent::doNoAction();

        \XLite\Core\Session::getInstance()->{$this->getSessionCellName() . '_np'} = null;
    }

    /**
     * doActionSearch
     *
     * @return void
     */
    protected function doActionSearch()
    {
        parent::doActionSearch();

        \XLite\Core\Session::getInstance()->{$this->getSessionCellName() . '_np'} = null;
    }
}