<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/order_details.twig */
class __TwigTemplate_c1cd4249cc594d1a2e06dfcf6684039ff7fc5b006c9077ee97063bf3e0898b52 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_cart\">
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\CartItems"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/order_details.twig";
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
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.details.left", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_cart">*/
/* 	{{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\CartItems') }}*/
/* </div>*/
/* */
