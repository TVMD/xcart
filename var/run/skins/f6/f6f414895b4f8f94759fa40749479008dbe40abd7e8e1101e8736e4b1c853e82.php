<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/shipping_details.twig */
class __TwigTemplate_3a01d5b0cf187229e8ffef5331ba59d707ee6a2b6921e78f5297708b42ef1ecf extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShippingNeeded", array(), "method")) {
            // line 8
            echo "<div class=\"checkout_fastlane_shipping-details\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\ShippingDetails"))), "html", null, true);
            echo "

    <a class=\"checkout_fastlane_shipping_edit_link\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Change shipping")), "html", null, true);
            echo "\" href=\"#\" v-on:click.prevent=\"switchTo('shipping')\"><i class=\"fa fa-truck\"></i></a>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/shipping_details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.details.left", weight="15")*/
/*  #}*/
/* */
/* {% if this.isShippingNeeded() %}*/
/* <div class="checkout_fastlane_shipping-details">*/
/*     {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\ShippingDetails') }}*/
/* */
/*     <a class="checkout_fastlane_shipping_edit_link" data-toggle="tooltip" data-placement="left" title="{{ t('Change shipping') }}" href="#" v-on:click.prevent="switchTo('shipping')"><i class="fa fa-truck"></i></a>*/
/* </div>*/
/* {% endif %}*/
/* */
