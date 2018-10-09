<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.qty.twig */
class __TwigTemplate_309084710258dd9b4ee09dded4485421f59d3a0e269d7ab3ed98a19bf14cd56f extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\Quantity", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.qty.twig";
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
/*  # Quantity input box*/
/*  #*/
/*  # @ListChild (list="product.details.page.info.buttons.cart-buttons", weight="10")*/
/*  # @ListChild (list="product.details.page.info.buttons-added.cart-buttons", weight="10")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons.cart-buttons", weight="10")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons-added.cart-buttons", weight="10")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Product\\Details\\Customer\\Quantity', product=this.product) }}*/
/* */
