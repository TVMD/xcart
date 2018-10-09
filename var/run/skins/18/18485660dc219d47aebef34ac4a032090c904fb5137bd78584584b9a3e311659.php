<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.zipcode.twig */
class __TwigTemplate_63d853fb5a217d0a773fb0ff179be6f62e40d2f00594cab62f918b7fef1c0015 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "zipcode"), "method")) {
            // line 8
            echo "  <li class=\"zipcode\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "address_zipcode", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getZipcode", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zip code"))))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.zipcode.twig";
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
/*  # @ListChild (list="location-select.address", weight="30")*/
/*  #}*/
/* */
/* {% if this.hasField('zipcode') %}*/
/*   <li class="zipcode">*/
/*     {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='address_zipcode', value=this.getZipcode(), label=t('Zip code')) }}*/
/*   </li>*/
/* {% endif %}*/
/* */
