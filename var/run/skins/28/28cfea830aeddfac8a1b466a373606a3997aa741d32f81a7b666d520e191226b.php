<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/header/sku.twig */
class __TwigTemplate_0e8d997d446363650ab588a762d1e71fce37abb786131047ee6f4bc40f72c148 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"sku\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("SKU")), "sortByColumn" => twig_constant("SORT_BY_MODE_SKU", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/header/sku.twig";
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
/*  # Item SKU*/
/*  #*/
/*  # @ListChild (list="itemsList.product.modify.brief.admin.header", weight="20")*/
/*  #}*/
/* */
/* <th class="sku">{{ widget(template='items_list/sort.twig', title=t('SKU'), sortByColumn=constant('SORT_BY_MODE_SKU', this)) }}</th>*/
/* */
