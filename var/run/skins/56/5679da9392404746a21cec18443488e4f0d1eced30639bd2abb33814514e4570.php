<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/shipping/methods.twig */
class __TwigTemplate_69f8111f2a8a9d35e5c4c48d00a7694939c44dd4e1c1c507fdc77f54cfee660e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_shipping_methods\">
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\ShippingMethods"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/shipping/methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.shipping.right", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_shipping_methods">*/
/* 	{{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\ShippingMethods') }}*/
/* </div>*/
