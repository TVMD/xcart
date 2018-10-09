<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/core_upgrade_needed/note_1_install.twig */
class __TwigTemplate_54c48c5099730f0ce0c06de1b2b0f34aff7b71772e2c444c68283519ddd90a0b extends \XLite\Core\Templating\Twig\Template
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
        // line 6
        echo "
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The module version is incompatible with your core version and cannot be installed. Minimum core version required for this module is X.", array("version" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNeededCoreVersion", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")))), "html", null, true);
        echo "   
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/core_upgrade_needed/note_1_install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Note for "Install add-ons" page*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable.core_upgrade_needed", weight="100")*/
/*  #}*/
/* */
/* {{ t('The module version is incompatible with your core version and cannot be installed. Minimum core version required for this module is X.', {'version': this.getNeededCoreVersion(this.module)}) }}   */
/* */
