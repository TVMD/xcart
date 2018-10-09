<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/payment/methods.twig */
class __TwigTemplate_b89d8fb8b2ccbae4852f31e9dc293c47b0f32ed8b174b431e5b1b5e3f8568c01 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_payment_methods\">
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\PaymentMethods"))), "html", null, true);
        echo "
</div>

";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.blocks.payment_methods.available"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/payment/methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.payment.right", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_payment_methods">*/
/* 	{{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\PaymentMethods') }}*/
/* </div>*/
/* */
/* {{ widget_list('checkout_fastlane.blocks.payment_methods.available') }}*/
/* */
