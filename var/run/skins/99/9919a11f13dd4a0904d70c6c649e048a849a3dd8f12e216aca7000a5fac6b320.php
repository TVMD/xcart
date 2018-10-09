<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/canonical.twig */
class __TwigTemplate_a53c0f2db918c5333eecf4f8479e91770f934d8eee4e0d3f0593bcaeba61d935 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCanonicalURL", array(), "method")) {
            // line 8
            echo "  <link rel=\"canonical\" href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCanonicalURL", array(), "method"), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/canonical.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Canonical tag*/
/*  #*/
/*  # @ListChild (list="head", weight="2")*/
/*  #}*/
/* */
/* {% if this.getCanonicalURL() %}*/
/*   <link rel="canonical" href="{{ this.getCanonicalURL() }}" />*/
/* {% endif %}*/
/* */
