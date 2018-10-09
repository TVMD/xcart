<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.logo.twig */
class __TwigTemplate_36ad7ef29650018299d67afb18b8811ea2f64d14ba2c4abcad33f80787800624 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"logo\">
  <img src=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInvoiceLogo", array(), "method"), "html", null, true);
        echo "\" alt=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Company", array()), "company_name", array()), "html", null, true);
        echo "\" class=\"logo\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.logo.twig";
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
/*  # Invoice : header : logo*/
/*  #*/
/*  # @ListChild (list="invoice.head", weight="20")*/
/*  #}*/
/* <td class="logo">*/
/*   <img src="{{ this.getInvoiceLogo() }}" alt="{{ this.config.Company.company_name }}" class="logo" />*/
/* </td>*/
/* */
