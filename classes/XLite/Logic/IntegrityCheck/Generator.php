<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Logic\IntegrityCheck;

/**
 * Generator
 */
class Generator extends \XLite\Logic\AGenerator
{
    /**
     * Default process tick duration
     */
    const DEFAULT_TICK_DURATION = 0.5;

    /**
     * Flag: is export in progress (true) or no (false)
     *
     * @var boolean
     */
    protected static $inProgress = false;

    /**
     * Set inProgress flag value
     *
     * @param boolean $value Value
     *
     * @return void
     */
    public function setInProgress($value)
    {
        static::$inProgress = $value;
    }

    /**
     * Initialize
     *
     * @return void
     */
    protected function initialize()
    {
        \XLite\Core\TmpVars::getInstance()->integrityCheckCoreData = [];
        \XLite\Core\TmpVars::getInstance()->integrityCheckModulesData = [];
    }

    // {{{ Steps

    /**
     * @return array
     */
    protected function getStepsList()
    {
        return array(
            'XLite\Logic\IntegrityCheck\Step\Core',
            'XLite\Logic\IntegrityCheck\Step\Modules',
        );
    }

    /**
     * Define steps
     *
     * @return array
     */
    protected function defineSteps()
    {
        $steps = array();
        $options = $this->getOptions();
        if (isset($options['steps'])) {
            $requestedSteps = $options['steps'];

            if (is_array($requestedSteps)) {
                foreach ($this->getStepsList() as $step) {
                    $_step = explode('\\', $step);
                    $_step = array_pop($_step);
                    $_step = strtolower($_step);

                    if (in_array($_step, $requestedSteps)) {
                        $steps[] = $step;
                    }
                }
            }
        }

        return $steps;
    }

    // }}}

    // {{{ SeekableIterator, Countable

    /**
     * \Countable::count
     *
     * @return integer
     */
    public function count()
    {
        if (!isset($this->countCache)) {
            if (!isset($this->options['count'])) {
                $this->options['count'] = 0;
                foreach ($this->getSteps() as $step) {
                    $this->options['count'] += $step->count();
                    $this->options['count' . get_class($step)] = $step->count();
                }
            }
            $this->countCache = $this->options['count'];
        }

        return $this->countCache;
    }

    // }}}

    // {{{ Service variable names

    /**
     * Get event name
     *
     * @return string
     */
    public static function getEventName()
    {
        return 'integrityCheck';
    }

    // }}}
}