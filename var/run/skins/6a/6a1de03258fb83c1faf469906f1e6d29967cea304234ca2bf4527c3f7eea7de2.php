<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.website.twig */
class __TwigTemplate_b9aedb55152b81e26a0c7e7381cd96eb2af7c4a7e5dee0bd6022fcb8d388ca97 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_website", array())) {
            // line 8
            echo "<p class=\"url\">
  <a href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_website", array()), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "company", array()), "company_website", array()), "html", null, true);
            echo "</a>
</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.companyAddress.website.twig";
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
/*  # Invoice : header : Company address box : website*/
/*  #*/
/*  # @ListChild (list="invoice.subhead.companyAddress", weight="500")*/
/*  #}*/
/* */
/* {% if this.company.company_website %}*/
/* <p class="url">*/
/*   <a href="{{ this.company.company_website }}">{{ this.company.company_website }}</a>*/
/* </p>*/
/* {% endif %}*/
/* */
