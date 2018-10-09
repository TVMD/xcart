<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Core;

/**
 * Layout manager
 */
class Layout extends \XLite\Core\Layout implements \XLite\Base\IDecorator
{
    const THEME_TWEAKER_CUSTOMER_INTERFACE = 'theme_tweaker/customer';
    const THEME_TWEAKER_MAIL_INTERFACE = 'theme_tweaker/mail';

    const THEME_TWEAKER_TEMPLATES_CACHE_KEY = 'theme_tweaker_templates';

    private $disabledTemplates;

    protected function getDisabledTemplates()
    {
        if (null === $this->disabledTemplates) {
            $cacheDriver = \XLite\Core\Cache::getInstance()->getDriver();
            if (!$list = $cacheDriver->fetch(static::THEME_TWEAKER_TEMPLATES_CACHE_KEY)) {
                $templates = \XLite\Core\Database::getRepo('XLite\Module\XC\ThemeTweaker\Model\Template')->findBy([
                    'enabled' => false
                ]);

                $list = array_map(function ($template) {
                    /** @var \XLite\Module\XC\ThemeTweaker\Model\Template $template */
                    return ltrim(str_replace([
                        static::THEME_TWEAKER_CUSTOMER_INTERFACE,
                        static::THEME_TWEAKER_MAIL_INTERFACE
                    ], '', $template->getTemplate()), '/');
                }, $templates);

                $cacheDriver->save(
                    static::THEME_TWEAKER_TEMPLATES_CACHE_KEY,
                    $list,
                    \XLite\Core\Task\Base\Periodic::INT_1_WEEK
                );
            }

            $this->disabledTemplates = $list;
        }

        return $this->disabledTemplates;
    }

    public function isDisabledTemplate($template)
    {
        return in_array($template, $this->getDisabledTemplates());
    }

    /**
     * Get skin paths (file system and web)
     *
     * @param string  $interface        Interface code OPTIONAL
     * @param boolean $reset            Local cache reset flag OPTIONAL
     * @param boolean $baseSkins        Use base skins only flag OPTIONAL
     * @param boolean $allInnerInterfaces
     *
     * @return array
     */
    public function getSkinPaths($interface = null, $reset = false, $baseSkins = false, $allInnerInterfaces = false)
    {
        return 'custom' === $interface
            ? [
                [
                    'name' => 'custom',
                    'fs'   => rtrim(LC_DIR_VAR, LC_DS),
                    'web'  => 'var',
                ],
            ]
            : parent::getSkinPaths($interface, $reset, $baseSkins, $allInnerInterfaces);
    }

    public function getFullPathByLocalPath($localPath, $interface)
    {
        $pathSkin = '';
        $shortPath = '';

        foreach ($this->getSkinPaths($this->getInterfaceByLocalPath($localPath)) as $path) {
            if (strpos($localPath, $path['name']) === 0) {
                $pathSkin = $path['name'];
                $shortPath = substr($localPath, strpos($localPath, LC_DS, strlen($pathSkin)) + strlen(LC_DS));

                break;
            }
        }

        $skin = $this->getTweakerSkinByInterface($interface);

        return ($shortPath && $pathSkin)
            ? $this->getFullPathByShortPath($shortPath, $interface, $skin ?: $pathSkin, $this->locale)
            : '';
    }

    protected function getFullPathByShortPath($shortPath, $interface, $skin, $locale = null)
    {
        $result = '';

        foreach ($this->getSkinPaths($interface ?: \XLite::CUSTOMER_INTERFACE) as $path) {
            if (strpos($path['name'], $skin) === 0
                && (null === $locale || $path['locale'] === $locale)
            ) {
                $result = $path['fs'] . LC_DS . $shortPath;

                break;
            }
        }

        return $result;
    }

    public function getInterfaceByLocalPath($localPath)
    {
        $result = null;

        $interfaces = [
            \XLite::CUSTOMER_INTERFACE,
            \XLite::CONSOLE_INTERFACE,
            \XLite::MAIL_INTERFACE,
            \XLite::COMMON_INTERFACE,
            \XLite::PDF_INTERFACE,
        ];

        foreach ($interfaces as $interface) {
            foreach ($this->getSkinPaths($interface) as $path) {
                if (strpos($localPath, $path['name']) === 0) {

                    $result = $interface;
                    break;
                }
            }

            if ($result) {
                break;
            }
        }

        return $result;
    }

    public function getTweakerSkinByInterface($interface)
    {
        $skins = [
            \XLite::CUSTOMER_INTERFACE => static::THEME_TWEAKER_CUSTOMER_INTERFACE,
            \XLite::MAIL_INTERFACE     => static::THEME_TWEAKER_MAIL_INTERFACE,
        ];

        return $skins[$interface];
    }

    protected function isResourceAvailableByPath($path)
    {
        $result = file_exists($path);

        if ($result && strpos($path, LC_DIR_SKINS . static::THEME_TWEAKER_CUSTOMER_INTERFACE) === 0) {
            return false;
        }

        return $result;
    }
}
