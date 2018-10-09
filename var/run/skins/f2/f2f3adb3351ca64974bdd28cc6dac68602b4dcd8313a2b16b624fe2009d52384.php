<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.state.twig */
class __TwigTemplate_82fa5b65d8e9de38221ef414ffaa6042c9084c9afb3c3ef2c4c640ccb9ba26cb extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Listbox\\State", "labelHelp" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("The countries to which the selected states belong will be added to the zone automatically.")), "fieldName" => "zone_states", "label" => "States", "labelFrom" => "All states", "labelTo" => "Selected states", "value" => $this->getAttribute($this->getAttribute(        // line 13
(isset($context["this"]) ? $context["this"] : null), "zone", array()), "getZoneStates", array(), "method"), "wrapperClass" => "zone-states"))), "html", null, true);
        // line 14
        echo "

";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\StatesForCountries", "label" => "Show states for selected countries only", "fieldName" => "states_for_countries"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 16,  25 => 14,  23 => 13,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Zone: states selector template*/
/*  #*/
/*  # @ListChild (list="zones.zone.details", weight="200")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Listbox\\State',*/
/*     labelHelp=t('The countries to which the selected states belong will be added to the zone automatically.'),*/
/*     fieldName='zone_states',*/
/*     label='States',*/
/*     labelFrom='All states',*/
/*     labelTo='Selected states',*/
/*     value=this.zone.getZoneStates(),*/
/*     wrapperClass='zone-states') }}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox\\StatesForCountries', label='Show states for selected countries only', fieldName='states_for_countries') }}*/
/* */
