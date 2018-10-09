<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.country.twig */
class __TwigTemplate_527368c053a63f5d983439ffcd31ffd23f9d59b99b93527315fa51496ffa730d extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Listbox\\Country", "fieldName" => "zone_countries", "label" => "Countries", "labelFrom" => "All countries", "labelTo" => "Selected countries", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "zone", array()), "getZoneCountries", array(), "method"), "wrapperClass" => "zone-countries"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.country.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Zone: country selector template*/
/*  #*/
/*  # @ListChild (list="zones.zone.details", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Listbox\\Country', fieldName='zone_countries', label='Countries', labelFrom='All countries', labelTo='Selected countries', value=this.zone.getZoneCountries(), wrapperClass='zone-countries') }}*/
/* */
