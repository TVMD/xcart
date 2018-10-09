<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

 namespace XLite\Module\CDev\XPaymentsConnector\View\Tabs;

/**
 * Profile dialog
 */
class AdminProfile extends \XLite\View\Tabs\AdminProfile implements \XLite\Base\IDecorator
{

    /**
     * Returns the list of targets where this widget is available
     *
     * @return string[]
     */
    public static function getAllowedTargets()
    {
        $list = parent::getAllowedTargets();
        $list[] = 'saved_cards';

        return $list;
    }

    /**
     * @return array
     */
    protected function defineTabs()
    {

        $tabs = parent::defineTabs();

        $cnd = new \XLite\Core\CommonCell();
        $cnd->class = 'Module\CDev\XPaymentsConnector\Model\Payment\Processor\SavedCard';

        $saveCardsMethods = \XLite\Core\Database::getRepo('XLite\Model\Payment\Method')->search($cnd);

        $profile = (null !== $this->getProfile())
            ? $this->getProfile()
            : \XLite\Core\Auth::getInstance()->getProfile();
        $isAnonymous = $profile->getAnonymous();

        if ($saveCardsMethods && !$isAnonymous) {
            $found = false;
            foreach ($saveCardsMethods as $pm) {
                if ($pm->isEnabled()) {
                    $found = true;
                    break;
                }
            }

            if ($found) {
                $tabs['saved_cards'] = array(
                    'weight'   => 1000,
                    'title'    => static::t('Saved credit cards'),
                    'template' => 'modules/CDev/XPaymentsConnector/account/saved_cards.twig',
                );
            }
        }

        return $tabs;

    }
}
