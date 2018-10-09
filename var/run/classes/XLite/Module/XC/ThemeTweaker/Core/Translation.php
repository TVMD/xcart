<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Core;

use XLite\Core\TranslationDriver\Db;

/**
 * Request
 */
 class Translation extends \XLite\Core\TranslationAbstract implements \XLite\Base\IDecorator
{
    /**
     * Get translation postprocessor.
     *
     * @return \XLite\Core\ITranslationProcessor
     */
    public function getProcessor()
    {
        if (!isset($this->processor) && $this->isInlineEditingEnabled()) {
            $this->processor = new EditableTranslationProcessor();
        }

        return $this->processor;
    }

    /**
     * Get translation
     *
     * @param string $name      Label name
     * @param array  $arguments Substitute arguments OPTIONAL
     * @param string $code      Language code OPTIONAL
     *
     * @return string
     */
    public function translateAsEditable($name, array $arguments = array(), $code = null)
    {
        $this->setProcessor(new EditableTranslationProcessor());
        $result = $this->translate($name, $arguments, $code);
        $this->setProcessor(null);

        return $result;
    }

    /**
     * Get translation
     *
     * @param string $name      Label name
     * @param array  $arguments Substitute arguments OPTIONAL
     * @param string $code      Language code OPTIONAL
     *
     * @return string
     */
    public function translate($name, array $arguments = array(), $code = null)
    {
        // Don't process the same thing twice
        return $name instanceof \Twig_Markup
            ? $name
            : parent::translate($name, $arguments, $code);
    }

    /**
     * Checks if inline language labels editor mode is on
     *
     * @return bool
     */
    public function isInlineEditingEnabled()
    {
        return \XLite\Module\XC\ThemeTweaker\Core\ThemeTweaker::getInstance()->isInLabelsMode();
    }
}
