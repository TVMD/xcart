<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/note.twig */
class __TwigTemplate_92341bc5d91eabfd02b846e77a89fd23701bd96fba71d731a77dc8f6697f75ff extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDependencyModules", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The following add-on(s) must be enabled")), "html", null, true);
            echo ":
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/dependencies/note.twig";
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
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable.dependencies", weight="100")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable.dependencies", weight="100")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable.dependencies", weight="100")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable.dependencies", weight="100")*/
/*  #}*/
/* {% if this.getDependencyModules(this.module) %}*/
/*   {{ t('The following add-on(s) must be enabled') }}:*/
/* {% endif %}*/
/* */
