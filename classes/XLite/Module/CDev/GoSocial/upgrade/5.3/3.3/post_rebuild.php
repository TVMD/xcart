<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

function cdev_gosocial_5_3_3_3_changeXCartVia()
{
    $repo = \XLite\Core\Database::getRepo('XLite\Model\Config');
    $optionToChange = $repo->findOneBy(
        array(
            'category'  => 'CDev\GoSocial',
            'name'      => 'tweet_via',
        )
    );

    if ($optionToChange && $optionToChange->getValue() === 'x_cart') {
        $optionToChange->setValue('');

        \XLite\Core\Database::getEM()->flush();
        \XLite\Core\Config::updateInstance();
    }
}

return function()
{
    cdev_gosocial_5_3_3_3_changeXCartVia();
};
