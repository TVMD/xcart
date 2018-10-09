<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/name.twig */
class __TwigTemplate_04799198db3c07235ad5d0e18487d3d43256128a70a566125a14dbe547c7d07f extends \XLite\Core\Templating\Twig\Template
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
        echo "<h5><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></h5>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/NextPreviousProduct/product/parts/dropdown_parts/name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Next product links*/
/*  #*/
/*  # @ListChild (list="next_previous.product.body.dropdown", weight="200")*/
/*  #}*/
/* <h5><a href="{{ this.getItemURL(this.item) }}">{{ this.item.getName() }}</a></h5>*/
/* */
