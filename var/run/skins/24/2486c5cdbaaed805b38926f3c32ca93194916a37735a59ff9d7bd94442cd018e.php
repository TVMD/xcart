<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.type.twig */
class __TwigTemplate_16fa9b5e4f440b5c278e146878a7f49992a0212fc2915d6335eda8d79cf304be extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "type"), "method")) {
            // line 8
            echo "  <li class=\"type\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\AddressType", "fieldName" => "address_type", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getType", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Type"))))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.type.twig";
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
/*  # Location popup : address : zipcode*/
/*  #*/
/*  # @ListChild (list="location-select.address", weight="40")*/
/*  #}*/
/* */
/* {% if this.hasField('type') %}*/
/*   <li class="type">*/
/*     {{ widget('\\XLite\\View\\FormField\\Select\\AddressType', fieldName='address_type', value=this.getType(), label=t('Type')) }}*/
/*   </li>*/
/* {% endif %}*/
/* */
