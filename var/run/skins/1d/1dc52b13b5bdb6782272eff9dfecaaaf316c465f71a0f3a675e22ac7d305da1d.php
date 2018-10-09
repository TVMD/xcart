<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/core_upgrade_needed.twig */
class __TwigTemplate_e4cb6bea765f67507c8286348ce8fb45b2a4c88c20c14cc8885e438228622c19 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCoreUpgradeNeeded", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <div class=\"note version error\">
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "core_upgrade_needed", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/core_upgrade_needed.twig";
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
/*  # "Core upgrade needed" note*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable", weight="200")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable", weight="200")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable", weight="200")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable", weight="200")*/
/*  #}*/
/* {% if this.isCoreUpgradeNeeded(this.module) %}*/
/*   <div class="note version error">*/
/*     {{ widget_list('core_upgrade_needed', type='nested', module=this.module) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
