<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.country.twig */
class __TwigTemplate_06a9fc3f01fe7c73747dd4cb7486b8376f15071c84b34d94a897bcf683e8c64e extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "country_code"), "method")) {
            // line 8
            echo "  <li class=\"country\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\Country", "fieldName" => "destination_country", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountryCode", array(), "method"), "stateSelectorId" => "destination-state", "stateInputId" => "destination-custom-state", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Country")), "required" => "true"))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.country.twig";
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
/*  # Shipping estimator : address : country*/
/*  #*/
/*  # @ListChild (list="shippingEstimator.address", weight="10")*/
/*  #}*/
/* */
/* {% if this.hasField('country_code') %}*/
/*   <li class="country">*/
/*     {{ widget('\\XLite\\View\\FormField\\Select\\Country', fieldName='destination_country', value=this.getCountryCode(), stateSelectorId='destination-state', stateInputId='destination-custom-state', label=t('Country'), required='true') }}*/
/*   </li>*/
/* {% endif %}*/
/* */
