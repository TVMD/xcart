<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/details/label.twig */
class __TwigTemplate_8ea2f77d0e6e7f5c4c12fd6a18fbe3594dddd2009c9f2c568593444abf690ba0 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Labels", "labels" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabel", array(0 => twig_constant("SALE_PRICE_LABEL", (isset($context["this"]) ? $context["this"] : null))), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/details/label.twig";
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
/*  # Label (internal list element)*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail.sale_price.label", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Labels', labels=this.getLabel(constant('SALE_PRICE_LABEL', this))) }}*/
/* */
