<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/shippingMethods.twig */
class __TwigTemplate_73647afddd21037f95cc21660f44181bf01c5d4316da344f493d078f925986e1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingAvailable", array(), "method")) {
            // line 7
            echo "  <div class=\"substep step-shipping-methods\">
    <div class=\"head-h3\"><span class=\"bullet\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubstepNumber", array(0 => "shippingMethods"), "method"), "html", null, true);
            echo "</span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delivery methods")), "html", null, true);
            echo "</div>
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Checkout\\ShippingMethodsList"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/shippingMethods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Checkout : shipping step : selected state : methods*/
/*  #*/
/*  # @ListChild (list="checkout.shipping.selected.sub.payment", weight="200")*/
/*  #}*/
/* {% if this.isShippingAvailable() %}*/
/*   <div class="substep step-shipping-methods">*/
/*     <div class="head-h3"><span class="bullet">{{ this.getSubstepNumber('shippingMethods') }}</span>{{ t('Delivery methods') }}</div>*/
/*     {{ widget('\\XLite\\View\\Checkout\\ShippingMethodsList') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
