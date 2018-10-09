<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.first.twig */
class __TwigTemplate_37f237e816e721c75162b5d5d30af05c8ada3846f74b950a8ba218befcd5a15d extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingEnabled", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Checkout\\ShippingAddress"))), "html", null, true);
            echo "
";
        } else {
            // line 10
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Checkout\\BillingAddress"))), "html", null, true);
            echo "
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.first.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # First address*/
/*  #*/
/*  # @ListChild (list="checkout.shipping.selected.sub.shipping", weight="100")*/
/*  #}*/
/* */
/* {% if this.isShippingEnabled() %}*/
/*   {{ widget('XLite\\View\\Checkout\\ShippingAddress') }}*/
/* {% else %}*/
/*   {{ widget('XLite\\View\\Checkout\\BillingAddress') }}*/
/* {% endif %}*/
/* */
/* */
