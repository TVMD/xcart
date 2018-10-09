<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/popup_address_form/apply_to_shipping.twig */
class __TwigTemplate_a3d3bec8749657f247eb79f20b0343afbde8a0e94e4732f54447c4a231acdb8f extends \XLite\Core\Templating\Twig\Template
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
            echo "    <li class=\"item-same_address input-checkbox-enabled clearfix form-group hidden\">
        ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\ApplyToBilling", "value" => false, "fieldName" => "same_address", "fieldId" => "popup_same_address"))), "html", null, true);
            echo "
    </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/popup_address_form/apply_to_shipping.twig";
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
/*  # @ListChild (list="checkout_fastlane.blocks.popup_address_form.billing", weight="999")*/
/*  #}*/
/* */
/* {% if this.isSameAddressVisible() %}*/
/*     <li class="item-same_address input-checkbox-enabled clearfix form-group hidden">*/
/*         {{ widget('XLite\\View\\FormField\\Input\\Checkbox\\ApplyToBilling', value=false, fieldName='same_address', fieldId='popup_same_address')}}*/
/*     </li>*/
/* {% endif %}*/
