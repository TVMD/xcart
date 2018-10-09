<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Core\Templating\Twig\Loader;


 class Filesystem extends \XLite\Core\Templating\Twig\Loader\FilesystemAbstract implements \XLite\Base\IDecorator
{
    protected function findTemplate($name)
    {
        $result = call_user_func_array(array('parent', __FUNCTION__), func_get_args());

        if (
            $result
            && strpos($result, 'theme_tweaker') !== false
            && \XLite\Core\Layout::getInstance()->isDisabledTemplate($name)
        ) {
            $name = $this->normalizeName($name);
            list($namespace, $shortname) = $this->parseName($name);

            foreach ($this->paths[$namespace] as $path) {
                if (
                    strpos($path, 'theme_tweaker') === false
                    && is_file($path.'/'.$shortname)
                ) {
                    if (false !== $realpath = realpath($path.'/'.$shortname)) {
                        return $this->cache[$name] = $realpath;
                    }

                    return $this->cache[$name] = $path.'/'.$shortname;
                }
            }
        }

        return $result;
    }
}