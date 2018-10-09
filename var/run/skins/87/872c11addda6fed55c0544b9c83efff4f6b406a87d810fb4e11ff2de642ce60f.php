<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/payment/heading.right.twig */
class __TwigTemplate_2868b4506a1a38945880bd11d264c96fb6eeb5e4724948ff5f247b30ab4c55ca extends \XLite\Core\Templating\Twig\Template
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
<h3 class=\"checkout_fastlane_block_heading\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Payment method")), "html", null, true);
        echo "</h3>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/payment/heading.right.twig";
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
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.payment.right", weight="0")*/
/*  #}*/
/* */
/* <h3 class="checkout_fastlane_block_heading">{{ t('Payment method') }}</h3>*/
