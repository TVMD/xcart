<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/module_upgrade_needed.twig */
class __TwigTemplate_8a39c9c802f34ff7259af62a99e4ea6cf6a8117ea9471989faa276fed9eeab0a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleUpgradeNeeded", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <div class=\"note version error\">
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "module_upgrade_needed", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/module_upgrade_needed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 11,  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # "Module upgrade needed"*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable", weight="300")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable", weight="300")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable", weight="300")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable", weight="300")*/
/*  #}*/
/* {% if this.isModuleUpgradeNeeded(this.module) %}*/
/*   <div class="note version error">*/
/*     {{ widget_list('module_upgrade_needed', type='nested', module=this.module) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
