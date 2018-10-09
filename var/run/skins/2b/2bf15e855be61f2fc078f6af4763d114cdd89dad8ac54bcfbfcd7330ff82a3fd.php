<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/product.items_list.rating.twig */
class __TwigTemplate_48e5a677ba2c112448cec487eee757004657386f5c4650f5ddfcb3b35d152b01 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\ItemsList\\AverageRating", "productId" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "id", array()), "widgetMode" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDisplayMode", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/product.items_list.rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Rating value in product info*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="35")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="45")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\ItemsList\\AverageRating', productId=this.product.id, widgetMode=this.getDisplayMode()) }}*/
/* */
