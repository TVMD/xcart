<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core\Translation;


class Label implements \XLite\Core\Serialization\SerializableNative, \JsonSerializable
{
    use \XLite\Core\Cache\ExecuteCachedTrait;

    private $label;
    private $parameters;
    private $code;

    /**
     * Label constructor.
     *
     * @param       $label
     * @param array $parameters
     * @param       $code
     */
    public function __construct($label, $parameters = [], $code = null)
    {
        $this->label = $label;
        $this->parameters = $parameters;
        $this->code = $code;
    }

    public function __toString()
    {
        return (string)$this->translate();
    }

    public function translate()
    {
        return $this->executeCachedRuntime(function () {
            $r = \XLite\Core\Translation::getInstance()->translate(
                $this->label,
                $this->parameters,
                $this->code
            );

            return $r;
        });
    }

    public function jsonSerialize()
    {
        return (string)$this;
    }
}