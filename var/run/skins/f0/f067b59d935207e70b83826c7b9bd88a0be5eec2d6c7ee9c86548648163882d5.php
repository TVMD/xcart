<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/popup_address_form/apply_to_billing.twig */
class __TwigTemplate_fc5631bea048dfdd60503718f4b029012d6ac0188fd06893c7919d3a581084a3 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSameAddressVisible", array(), "method")) {
            // line 8
            echo "    <li class=\"item-same_address input-checkbox-enabled clearfix form-group\">
        ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\ApplyToBilling", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSameAddress", array(), "method"), "fieldName" => "same_address", "fieldId" => "popup_same_address"))), "html", null, true);
            echo "
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/popup_address_form/apply_to_billing.twig";
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
/*  # @ListChild (list="checkout_fastlane.blocks.popup_address_form.shipping", weight="999")*/
/*  #}*/
/* */
/* {% if this.isSameAddressVisible() %}*/
/*     <li class="item-same_address input-checkbox-enabled clearfix form-group">*/
/*         {{ widget('XLite\\View\\FormField\\Input\\Checkbox\\ApplyToBilling', value=this.isSameAddress(), fieldName='same_address', fieldId='popup_same_address')}}*/
/*     </li>*/
/* {% endif %}*/
