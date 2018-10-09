<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/sections.twig */
class __TwigTemplate_8172a0fe596ba207e0ee187d2ae4e864944cba5b40715cb968cd25eee65b1896 extends \XLite\Core\Templating\Twig\Template
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
<sections inline-template>
    <div class=\"checkout_fastlane_sections\" v-bind:class=\"classes\">
        <div class=\"checkout_fastlane_section_wrapper\">
            ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\FastLaneCheckout\\View\\Sections"))), "html", null, true);
        echo "
            ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections_block.after"))), "html", null, true);
        echo "
        </div>
    \t";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.after"))), "html", null, true);
        echo "
    </div>
    <div class=\"clearfix\"></div>
</sections>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/sections.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 13,  29 => 11,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout heading bar*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane", weight="20")*/
/*  #}*/
/* */
/* <sections inline-template>*/
/*     <div class="checkout_fastlane_sections" v-bind:class="classes">*/
/*         <div class="checkout_fastlane_section_wrapper">*/
/*             {{ widget('XLite\\Module\\XC\\FastLaneCheckout\\View\\Sections') }}*/
/*             {{ widget_list('checkout_fastlane.sections_block.after') }}*/
/*         </div>*/
/*     	{{ widget_list('checkout_fastlane.sections.after') }}*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* </sections>*/
/* */
