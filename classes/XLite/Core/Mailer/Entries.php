<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core\Mailer;



/**
 * Entries
 */
class Entries
{
    /**
     * @var Entry[]
     */
    protected $entries;

    /**
     * Entry constructor.
     *
     * @param array $entries
     */
    public function __construct(array $entries)
    {
        $this->entries = $this->prepareEntries($entries);
    }

    /**
     * @param array $entries
     *
     * @return array
     */
    protected function prepareEntries(array $entries)
    {
        return array_filter(array_map([$this, 'prepareEntry'], $entries));
    }

    /**
     * @param $entry
     *
     * @return null|Entry
     */
    protected function prepareEntry($entry)
    {
        $entry = is_array($entry)
            ? array_map([$this, 'filterEntry'], $entry)
            : $this->filterEntry((string)$entry);

        return Entry::isValid($entry)
            ? new Entry($entry)
            : null;
    }

    /**
     * @return string
     */
    public function getFrom()
    {
        $from = reset($this->entries);
        return $from
            ? $from->getAddress()
            : '';
    }

    /**
     * @param $value
     *
     * @return mixed
     */
    protected function filterEntry($value)
    {
        $value = str_replace('\t', "\t", $value);
        $value = str_replace("\t", '', $value);
        $value = str_replace('\r', "\r", $value);
        $value = str_replace("\r", '', $value);
        $value = str_replace('\n', "\n", $value);
        $value = explode("\n", $value);
        return $value[0];
    }

    /**
     * @return array
     */
    public function getReplyTos()
    {
        if (count($this->entries) > 1) {
            return array_slice($this->entries, 1);
        }

        return $this->entries;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getFrom();
    }
}