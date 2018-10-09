<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.state.twig */
class __TwigTemplate_596e8d1fcb8be85780a9ea4b28c5cbd133a189e97ad15d7bcf46931e8d201140 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"state\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\State", "fieldName" => "address_state", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getState", array(), "method"), "style" => "field-required", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("State")), "required" => "true", "country" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountryCode", array(), "method")))), "html", null, true);
        echo "
</li>

<li class=\"state\">
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "address_custom_state", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOtherState", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("State"))))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/address.state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Location popup : address : state*/
/*  #*/
/*  # @ListChild (list="location-select.address", weight="20")*/
/*  #}*/
/* */
/* <li class="state">*/
/*   {{ widget('\\XLite\\View\\FormField\\Select\\State', fieldName='address_state', value=this.getState(), style='field-required', label=t('State'), required='true', country=this.getCountryCode()) }}*/
/* </li>*/
/* */
/* <li class="state">*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='address_custom_state', value=this.getOtherState(), label=t('State')) }}*/
/* </li>*/
/* */
