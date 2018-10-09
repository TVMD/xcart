<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/header/sku.twig */
class __TwigTemplate_a62f9a2b1f4049f15299d075807a91b896bf68ec587450371057a3fbd312d1ca extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/header/sku.twig";
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
/*  # @ListChild (list="itemsList.product.admin.featured.header", weight="20")*/
/*  #}*/
/* */
/* <th class="sku">{{ widget(template='items_list/sort.twig', title=t('SKU'), sortByColumn=constant('SORT_BY_MODE_SKU', this)) }}</th>*/
/* */
