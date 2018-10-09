<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/module_upgrade_needed/note.twig */
class __TwigTemplate_535d377d3f98189b8a426ed129b8debe58e59de8f35e1bf3e3b9dce3bc794690 extends \XLite\Core\Templating\Twig\Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The module is not released for your X-Cart version")), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/module_upgrade_needed/note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 9,);
    }
}
/* {##*/
/*  # Note for wrong module version*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable.module_upgrade_needed", weight="100")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable.module_upgrade_needed", weight="100")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable.module_upgrade_needed", weight="100")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable.module_upgrade_needed", weight="100")*/
/*  #}*/
/* {{ t('The module is not released for your X-Cart version') }}*/
/* */
