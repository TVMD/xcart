<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/icon.twig */
class __TwigTemplate_60d0d7d2a65ef45b0bbd94856112e93f459b3ef05ab898ffe2413875d1f855fe extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"icon\">
  <div class=\"icon-container\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "icon", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
 </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/icon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 11,  19 => 9,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns", weight="30")*/
/*  # @ListChild (list="itemsList.module.install.columns", weight="30")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns", weight="30")*/
/*  # @ListChild (list="itemsList.module.purchased.columns", weight="30")*/
/*  #}*/
/* <td class="icon">*/
/*   <div class="icon-container">*/
/*     {{ widget_list('icon', type='nested', module=this.module) }}*/
/*  </div>*/
/* </td>*/
/* */
