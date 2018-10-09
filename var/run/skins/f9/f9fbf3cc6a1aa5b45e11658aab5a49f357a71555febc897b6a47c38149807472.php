<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/shipping/email.twig */
class __TwigTemplate_6019fa7344747ddf749aacf6d00db771cfcf83dc36940653fbf1303a1d2ceef8 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEmailFieldVisible", array(), "method")) {
            // line 8
            echo "<div class=\"checkout_fastlane_invoice_email\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Email"))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/shipping/email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.shipping.left", weight="10")*/
/*  #}*/
/* */
/* {% if this.isEmailFieldVisible() %}*/
/* <div class="checkout_fastlane_invoice_email">*/
/*     {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Blocks\\Email') }}*/
/* </div>*/
/* {% endif %}*/
