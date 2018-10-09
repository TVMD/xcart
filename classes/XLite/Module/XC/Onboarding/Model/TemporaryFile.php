<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Onboarding\Model;

use Includes\Utils\URLManager;

/**
 * Temporary file store
 */
class TemporaryFile extends \XLite\Model\TemporaryFile implements \XLite\Base\IDecorator
{
    /**
     * Alternative image text
     *
     * @var string
     */
    protected $alt = '';

    /**
     * Set alt
     *
     * @param string $alt
     * @return TemporaryFile
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;
        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
}
