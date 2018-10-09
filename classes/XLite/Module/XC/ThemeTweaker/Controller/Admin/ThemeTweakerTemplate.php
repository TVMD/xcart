<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\XC\ThemeTweaker\Controller\Admin;

use XLite\Core\Database;
use XLite\Module\XC\ThemeTweaker\Core\TemplateObjectProvider;

/**
 * Theme tweaker template controller
 */
class ThemeTweakerTemplate extends \XLite\Controller\Admin\AAdmin
{
    public function __construct(array $params)
    {
        parent::__construct($params);

        $this->params = array_merge($this->params, ['id', 'template']);
    }

    /**
     * Return the current page title (for the content area)
     *
     * @return string
     */
    public function getTitle()
    {
        return static::t('Look & Feel') . ' :: ' . $this->getTemplateLocalPath();
    }

    /**
     * Is create request
     *
     * @return boolean
     */
    public function isCreate()
    {
        return (bool) \XLite\Core\Request::getInstance()->template;
    }

    /**
     * Update model
     *
     * @return void
     */
    protected function doActionUpdate()
    {
        if ($this->getModelForm()->performAction('modify')) {

            if (\Xlite\Core\Request::getInstance()->isCreate) {

                echo <<<HTML
<script>window.opener.location.reload();window.close()</script>
HTML;
                exit;

            } else {
                $this->setReturnUrl(\XLite\Core\Converter::buildURL('theme_tweaker_templates'));
            }
        }
    }

    /**
     * Update model
     *
     * @return void
     */
    protected function doActionApplyChanges()
    {
        $templatePath = TemplateObjectProvider::getInstance()->getTemplatePath();
        $interface = \XLite\Core\Request::getInstance()->interface ?: \XLite::CUSTOMER_INTERFACE;
        $innerInterface = \XLite\Core\Request::getInstance()->innerInterface ?: \XLite::CUSTOMER_INTERFACE;
        $rawData = \XLite\Core\Request::getInstance()->getNonFilteredData();
        $content = isset($rawData['content']) ? $rawData['content'] : null;

        if ($templatePath) {
            $entity = TemplateObjectProvider::getInstance()->getTemplateObject();
            $layout = \XLite\Core\Layout::getInstance();

            if ($interface === \XLite::MAIL_INTERFACE) {
                $layout->setMailSkin($innerInterface);
            }

            $fullPath = $layout->getFullPathByLocalPath($templatePath, $interface);

            if (\Includes\Utils\FileManager::write($fullPath, $content)) {
                $this->getTemplateCacheManager()->invalidate($fullPath);

                $entity->setDate(LC_START_TIME);
                $entity->setTemplate(substr($fullPath, strlen(\LC_DIR_SKINS)));

                Database::getEM()->persist($entity);
                Database::getEM()->flush();
            } else {
                $this->addErrorMessage(
                    'file permissions',
                    static::t('The file {{file}} does not exist or is not writable.', ['file' => $templatePath]),
                    ['file' => $fullPath]
                );
            }
        }

        $this->set('silent', true);
    }

    /**
     * Returns a (cached) templating engine instance
     *
     * @return CacheManagerInterface
     */
    protected function getTemplateCacheManager()
    {
        return $this->getContainer()->get('template_cache_manager');
    }

    /**
     * Get model form class
     *
     * @return string
     */
    protected function getModelFormClass()
    {
        return 'XLite\Module\XC\ThemeTweaker\View\Model\Template';
    }

    /**
     * Returns current template short path
     *
     * @return string
     */
    protected function getTemplateLocalPath()
    {
        $localPath = '';

        if ($this->isCreate()) {
            $localPath = \XLite\Core\Request::getInstance()->template;
        } elseif (\XLite\Core\Request::getInstance()->id) {
            $template = Database::getRepo('XLite\Module\XC\ThemeTweaker\Model\Template')
                ->find(\XLite\Core\Request::getInstance()->id);

            $localPath = $template ? $template->getTemplate() : '';
        }

        return $localPath;
    }
}
