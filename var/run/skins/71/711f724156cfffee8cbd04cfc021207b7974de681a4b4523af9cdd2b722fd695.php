<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.name.twig */
class __TwigTemplate_4ad98f38001ea85ad8c0e2e8cba040633a2578ff6b0bee423fcc23ace70d1651 extends \XLite\Core\Templating\Twig\Template
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
<strong>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_name", array()), "html", null, true);
        echo "</strong>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.name.twig";
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
/*  # Invoice : header : Company address box : Company name*/
/*  #*/
/*  # @ListChild (list="invoice.subhead.companyAddress", weight="100")*/
/*  #}*/
/* */
/* <strong>{{ this.company.company_name }}</strong>*/
/* */
