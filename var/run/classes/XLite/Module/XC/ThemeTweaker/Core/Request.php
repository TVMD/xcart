<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Core;

/**
 * Request
 */
 class Request extends \XLite\Core\RequestAbstract implements \XLite\Base\IDecorator
{
    /**
     * @var string
     */
    protected $identifier;

    /**
     * Current request identifier
     *
     * @return string
     */
    public function getUniqueIdentifier()
    {
        if (null === $this->identifier) {
            $this->identifier = hash('md4', uniqid('', true));
        }

        return $this->identifier;
    }

    /**
     * Drag-n-drop-cart feature is turned off in layout edit mode
     *
     * @return boolean
     */
    public static function isDragDropCartFlag()
    {
        return parent::isDragDropCartFlag()
            && !ThemeTweaker::getInstance()->isInLayoutMode()
            && !\XLite\Core\Translation::getInstance()->isInlineEditingEnabled();
    }

    /**
     * Mark templates
     *
     * @return boolean
     */
    public function isInLayoutMode()
    {
        return Themetweaker::getInstance()->isInLayoutMode();
    }
}
