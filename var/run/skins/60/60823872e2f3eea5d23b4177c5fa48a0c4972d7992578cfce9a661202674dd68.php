<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/meta_description.twig */
class __TwigTemplate_e0551989ef77122c01cf6617731a62f5dc7a60c5701073a0ee3881bc435002f6 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMetaDescription", array(), "method")) {
            // line 8
            echo "  <meta name=\"description\" content=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMetaDescription", array(), "method"), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/meta_description.twig";
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
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="600")*/
/*  #}*/
/* */
/* {% if this.getMetaDescription() %}*/
/*   <meta name="description" content="{{ this.getMetaDescription() }}" />*/
/* {% endif %}*/
/* */
