<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.second.twig */
class __TwigTemplate_366f663398b279a7886180809b87bfbde8003eaa707b75b8872821262ffef0ef extends \XLite\Core\Templating\Twig\Template
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
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Checkout\\BillingAddress"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.second.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # First address*/
/*  #*/
/*  # @ListChild (list="checkout.shipping.selected.sub.payment", weight="100")*/
/*  #}*/
/* */
/* {% if this.isShippingEnabled() %}*/
/*   {{ widget('XLite\\View\\Checkout\\BillingAddress') }}*/
/* {% endif %}*/
/* */
