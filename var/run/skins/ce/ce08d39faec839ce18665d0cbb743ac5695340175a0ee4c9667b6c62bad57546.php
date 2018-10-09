<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/main.twig */
class __TwigTemplate_a53c448e6aef20e16ebb2c026fee5c949ee0a200769b26258d33df6976e450d6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"module-main-section\">
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "module-main-section", "type" => "nested", "module" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns", weight="50")*/
/*  # @ListChild (list="itemsList.module.install.columns", weight="50")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns", weight="50")*/
/*  # @ListChild (list="itemsList.module.purchased.columns", weight="50")*/
/*  #}*/
/* <td class="module-main-section">*/
/*   {{ widget_list('module-main-section', type='nested', module=this.module) }}*/
/* </td>*/
/* */
