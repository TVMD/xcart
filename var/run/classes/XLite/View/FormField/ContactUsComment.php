<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\View\FormField;


class ContactUsComment extends \XLite\View\FormField\AFormField
{
    /**
     * Return field type
     *
     * @return string
     */
    public function getFieldType()
    {
        return self::FIELD_TYPE_LABEL;
    }

    /**
     * Return field template
     *
     * @return string
     */
    protected function getFieldTemplate()
    {
        return '';
    }

    /**
     * @return string
     */
    public function getLink()
    {
        $result = null;

        $module = $this->getModule();


        if ($module) {
            $moduleInstalled = $module->getModuleInstalled();

            if ($moduleInstalled) {
                $result = $moduleInstalled->getEnabled()
                    ? $moduleInstalled->getSettingsForm()
                    : $moduleInstalled->getInstalledURL();
            }
        }

        return $result;
    }

    protected function isVisible()
    {
        return parent::isVisible()
            && $this->getLink();
    }

    /**
     * Return widget default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'form_field/contactUsComment.twig';
    }

    protected function getModule()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Module')
            ->findOneByModuleName('CDev\\ContactUs', true);
    }
}
