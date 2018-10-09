<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header.twig */
class __TwigTemplate_f867c9f116f69eb88e3b28b49665672a3328d2d631277f3c3f9d6831afded9d4 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_header\">
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.header.top"))), "html", null, true);
        echo "
\t<div class=\"checkout_fastlane_header-left\">
\t\t";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.header.left"))), "html", null, true);
        echo "
\t</div>
\t<div class=\"checkout_fastlane_header-right\">
\t\t";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.header.right"))), "html", null, true);
        echo "
\t</div>
\t<div class=\"clearfix\"></div>
\t";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.header.bottom"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  34 => 13,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout heading bar*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_header">*/
/* 	{{ widget_list('checkout_fastlane.header.top') }}*/
/* 	<div class="checkout_fastlane_header-left">*/
/* 		{{ widget_list('checkout_fastlane.header.left') }}*/
/* 	</div>*/
/* 	<div class="checkout_fastlane_header-right">*/
/* 		{{ widget_list('checkout_fastlane.header.right') }}*/
/* 	</div>*/
/* 	<div class="clearfix"></div>*/
/* 	{{ widget_list('checkout_fastlane.header.bottom') }}*/
/* </div>*/
