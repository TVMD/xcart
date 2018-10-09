<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core\Mailer;


/**
 * Entry
 */
class Entry
{
    /**
     * @var string
     */
    protected $address;
    /**
     * @var string
     */
    protected $name;

    /**
     * ReplyTo constructor.
     *
     * @param array|string $data
     */
    public function __construct($data)
    {
        if (isset($data['address'])) {
            $this->address = $data['address'];

            if (isset($data['name'])) {
                $this->name = $data['name'];
            }
        } else {
            $this->address = (string)$data;
        }
    }

    /**
     * @param $data
     *
     * @return bool
     */
    public static function isValid($data)
    {
        return (
                is_string($data)
                && mb_strlen($data)
            ) || (
                is_array($data)
                && isset($data['address'])
            );
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->getAddress();
    }
}