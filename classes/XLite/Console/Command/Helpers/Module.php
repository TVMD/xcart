<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Console\Command\Helpers;

use XLite\Model\Repo;

class Module
{
    const NOT_FOUND = 'not_found';
    const NOT_INSTALLED = 'not_installed';
    const INSTALLED = 'installed';
    const ENABLED = 'enabled';

    /**
     * @var Repo\Module
     */
    private $repo;

    public function __construct(Repo\Module $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @param $name
     *
     * @return string
     * @throws \Exception
     */
    public function getModuleStateByName($name)
    {
        if (substr_count($name, '\\') + 1 !== 2) {
            throw new \Exception("Module name $name has wrong format. Should be Author\\\\Name");
        }

        list($author, $name) = explode('\\', $name);

        /** @var \XLite\Model\Module $module */
        $module = $this->repo->findOneBy(
            [
                'author' => $author,
                'name'   => $name,
            ],
            [ 'fromMarketplace' => 'ASC' ]
        );

        $result = static::NOT_FOUND;

        if ($module) {

            if ($module->getFromMarketplace()) {
                $result = static::NOT_INSTALLED;
            } else {
                $result = $module->getEnabled()
                    ? static::ENABLED
                    : static::INSTALLED;
            }
        }

        return $result;
    }
}
