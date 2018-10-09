<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\Concierge\Core;

abstract class ATrack extends AMessage
{
    /**
     * @var string
     */
    protected $event;

    /**
     * @var array
     */
    protected $properties;

    public function getType()
    {
        return static::TYPE_TRACK;
    }

    public function getArguments()
    {
        $admin       = \XLite\Core\Auth::getInstance()->getProfile();
        $admin_email = $admin ? $admin->getLogin() : '';

        // @tricky: like on x-cart.com
        $defaultProperties = [
            'Form Name'   => 'Concierge: ' . $this->getEvent(),
            'host'        => $_SERVER['HTTP_HOST'],
            'EventSource' => 'Concierge',
            'admin_email' => $admin_email,
        ];

        return [
            'Submitted Form',
            array_merge($defaultProperties, $this->getProperties()),
            $this->getOptions(),
        ];
    }

    /**
     * @param string $integration
     *
     * @return array
     */
    public function toArray($integration = '')
    {
        $result = parent::toArray($integration);
        if ($integration === 'intercom') {
            $result['arguments'][0] .= ' ' . $this->getEvent();
        }

        return $result;
    }

    /**
     * @return string
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param string $event
     */
    public function setEvent($event)
    {
        $this->event = $event;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param array $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }
}
