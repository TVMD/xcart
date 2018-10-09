<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/title.twig */
class __TwigTemplate_67af340a85c6d3e695fc6f1c1bf08d5017e48bcebc50c2f3f09f0b51750ffb34 extends \XLite\Core\Templating\Twig\Template
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
<title>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageTitle", array(), "method"), "html", null, true);
        echo "</title>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/title.twig";
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
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="100")*/
/*  #}*/
/* */
/* <title>{{ this.getPageTitle() }}</title>*/
/* */
