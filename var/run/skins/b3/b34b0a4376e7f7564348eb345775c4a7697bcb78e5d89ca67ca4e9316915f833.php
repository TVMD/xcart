<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/sku.twig */
class __TwigTemplate_cfc000723c9f4be3802d1592f18f44e2b7f476aca29c267ea1e558c48d7f3cc9 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/sku.twig";
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
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="20")*/
/*  #}*/
/* */
/* <th class="sku">{{ widget(template='items_list/sort.twig', title=t('SKU'), sortByColumn=constant('SORT_BY_MODE_SKU', this)) }}</th>*/
/* */
