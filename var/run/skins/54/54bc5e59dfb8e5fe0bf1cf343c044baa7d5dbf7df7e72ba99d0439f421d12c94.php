<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/meta_title.twig */
class __TwigTemplate_bf3711e4717fd21cfbbc23ecd4f4b1d48552c1967870e82277fd49a15de46d41 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMetaTitle", array(), "method")) {
            // line 8
            echo "    <meta name=\"title\" content=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMetaTitle", array(), "method"), "html", null, true);
            echo "\" />
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/meta_title.twig";
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
/*  # @ListChild (list="head", weight="550")*/
/*  #}*/
/* */
/* {% if this.getMetaTitle() %}*/
/*     <meta name="title" content="{{ this.getMetaTitle() }}" />*/
/* {% endif %}*/
/* */
