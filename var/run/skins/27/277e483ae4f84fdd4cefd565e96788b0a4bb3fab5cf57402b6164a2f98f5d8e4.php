<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/note_mutual.twig */
class __TwigTemplate_99c56061b224f8dc4542c08542f988d69220c2e21d62c0d8083188de5a077663 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEnabledMutualModules", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The following add-on(s) must be disabled")), "html", null, true);
            echo ":
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/note_mutual.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Top-level note*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable.dependencies", weight="300")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable.dependencies", weight="300")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable.dependencies", weight="300")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable.dependencies", weight="300")*/
/*  #}*/
/* {% if this.getEnabledMutualModules(this.module) %}*/
/*   {{ t('The following add-on(s) must be disabled') }}:*/
/* {% endif %}*/
/* */
