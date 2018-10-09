<?php

/* /var/www/next/output/xcart/src/skins/admin/header/parts/content-type.twig */
class __TwigTemplate_c5bf00ff7f9912d5fedda18a40db92adb3156995e895503849246771c2249049 extends \XLite\Core\Templating\Twig\Template
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
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCharset", array(), "method");
        echo "\" />
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/header/parts/content-type.twig";
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
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head", weight="20")*/
/*  #}*/
/* */
/* <meta http-equiv="Content-Type" content="text/html; charset={{ this.getCharset()|raw }}" />*/
/* */
