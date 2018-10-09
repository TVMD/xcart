<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable.twig */
class __TwigTemplate_d471f28cfaf41d53a0c69d149c03b48b00da112786793018426f15dfe5d9d902 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasErrors", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 10
            echo "  <div>
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cannot_enable", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable.twig";
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
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages", weight="30")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="400")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section", weight="400")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section", weight="400")*/
/*  #}*/
/* {% if this.hasErrors(this.module) %}*/
/*   <div>*/
/*     {{ widget_list('cannot_enable', type='nested', module=this.module) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
