<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/currency.twig */
class __TwigTemplate_d0118752baa0181b7af3b8006a53443f30a58fd99d93364bc8e2018d3eaefd1f extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCurrencySelectorAvailable", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentCurrency", array(), "method"))) {
            // line 8
            echo "<span class='currency-indicator'>
\t";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCurrentCurrency", array(), "method"), "getCode", array(), "method"), "html", null, true);
            echo "
</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/currency.twig";
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
/*  # @ListChild (list="layout.header.bar.locale", weight="30")*/
/*  #}*/
/* */
/* {% if this.isCurrencySelectorAvailable() and this.getCurrentCurrency() %}*/
/* <span class='currency-indicator'>*/
/* 	{{ this.getCurrentCurrency().getCode() }}*/
/* </span>*/
/* {% endif %}*/
/* */
