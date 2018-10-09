<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/payment/billing.twig */
class __TwigTemplate_b4e38f36fb7703b7a33c4d19fef5df7c1eec81fb4a39e42cf349786e5e934344 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Address\\Billing"))), "html", null, true);
        echo "

";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAddressBookVisible", array(), "method")) {
            // line 10
            echo "<div class=\"checkout_fastlane_change_address\">
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\AddressBook", "style" => "always-reload", "addressType" => "b", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Choose another address"))))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/payment/billing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  29 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.payment.left", weight="20")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Address\\Billing') }}*/
/* */
/* {% if this.isAddressBookVisible() %}*/
/* <div class="checkout_fastlane_change_address">*/
/*     {{ widget('XLite\\View\\Button\\AddressBook', style="always-reload", addressType='b', label=t('Choose another address')) }}*/
/* </div>*/
/* {% endif %}*/
