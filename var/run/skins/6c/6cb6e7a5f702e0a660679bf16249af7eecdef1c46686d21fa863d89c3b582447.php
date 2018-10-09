<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/table.captions.sku.twig */
class __TwigTemplate_6226242ef89005ede89795373d4ea28abf6c1177c9bc7e453d15dbb10f7176e5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"caption-product-sku\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("SKU")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/table.captions.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Item SKU*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.captions", weight="10")*/
/*  #}*/
/* <th class="caption-product-sku">{{ t('SKU') }}</th>*/
/* */
