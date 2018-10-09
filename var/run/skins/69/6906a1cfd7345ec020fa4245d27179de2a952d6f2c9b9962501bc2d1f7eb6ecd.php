<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/country.twig */
class __TwigTemplate_a4336751bfc83443a3dad0c5a5d0b8ddd4b47493b85738575d0e58d9afff3911 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentCountry", array(), "method")) {
            // line 8
            echo "<span class='country-indicator'>
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentCountry", array(), "method"), "getCountry", array(), "method"), "html", null, true);
            echo "
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/country.twig";
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
/*  # Country part*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.locale", weight="10")*/
/*  #}*/
/* */
/* {% if this.getCurrentCountry() %}*/
/* <span class='country-indicator'>*/
/*     {{ this.getCurrentCountry().getCountry() }}*/
/* </span>*/
/* {% endif %}*/
