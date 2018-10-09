<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig */
class __TwigTemplate_e3932915855f1c4cf87419b98387ce0dd56f57407b9a65bb9dbb44aab30aec0a extends \XLite\Core\Templating\Twig\Template
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
        $context["company"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array());
        // line 8
        echo "
<p>
  ";
        // line 10
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_address", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_address", array()), "html", null, true);
            echo "<br />";
        }
        // line 11
        echo "  ";
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_city", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_city", array()), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationState", array()), "state", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationState", array()), "state", array()), "html", null, true);
            echo ", ";
        }
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_zipcode", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["company"]) ? $context["company"] : null), "location_zipcode", array()), "html", null, true);
        }
        echo "<br />
  ";
        // line 12
        if ($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationCountry", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["company"]) ? $context["company"] : null), "locationCountry", array()), "getCountry", array(), "method"), "html", null, true);
        }
        // line 13
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  48 => 12,  33 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice : header : Company address box : Address*/
/*  #*/
/*  # @ListChild (list="invoice.subhead.companyAddress", weight="200")*/
/*  #}*/
/* */
/* {% set company = this.company %}*/
/* */
/* <p>*/
/*   {% if company.location_address %}{{ company.location_address }}<br />{% endif %}*/
/*   {% if company.location_city %}{{ company.location_city }}, {% endif %}{% if company.locationState.state %}{{ company.locationState.state }}, {% endif %}{% if company.location_zipcode %}{{ company.location_zipcode }}{% endif %}<br />*/
/*   {% if company.locationCountry %}{{ company.locationCountry.getCountry() }}{% endif %}*/
/* </p>*/
/* */
