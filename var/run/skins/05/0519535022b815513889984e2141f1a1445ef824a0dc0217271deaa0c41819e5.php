<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/table.captions.price.twig */
class __TwigTemplate_48dbf6be6acbcc02b2a547f3d1b62e85fd3945abef6b3675256531cc34921bf6 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"caption-product-price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Price")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/table.captions.price.twig";
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
/*  # Item price*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.captions", weight="40")*/
/*  #}*/
/* <th class="caption-product-price">{{ t('Price') }}</th>*/
/* */
