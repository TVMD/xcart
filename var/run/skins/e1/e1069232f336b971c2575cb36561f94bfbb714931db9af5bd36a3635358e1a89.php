<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.country.twig */
class __TwigTemplate_1cfd3693ae29f69bee4741d38eb2bc63dd8f0e9d42c30ab6927ade6708f6ae8b extends \XLite\Core\Templating\Twig\Template
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
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\Country", "fieldName" => "address_country", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountryCode", array(), "method"), "stateSelectorId" => "address-state", "stateInputId" => "address-custom-state", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Country")), "required" => "true"))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.country.twig";
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
/*  # Location popup : address : country*/
/*  #*/
/*  # @ListChild (list="location-select.address", weight="10")*/
/*  #}*/
/* */
/* {% if this.hasField('country_code') %}*/
/*   <li class="country">*/
/*     {{ widget('\\XLite\\View\\FormField\\Select\\Country', fieldName='address_country', value=this.getCountryCode(), stateSelectorId='address-state', stateInputId='address-custom-state', label=t('Country'), required='true') }}*/
/*   </li>*/
/* {% endif %}*/
/* */
