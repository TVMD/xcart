<?php

/* /var/www/next/output/xcart/src/skins/admin/header/parts/favicon.twig */
class __TwigTemplate_fe05dd666ea39cd2661cfb3fbc761a0444bb0ae20a811652fb97076db0aa7b07 extends \XLite\Core\Templating\Twig\Template
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
<link rel=\"shortcut icon\" href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFavicon", array(), "method"), "html", null, true);
        echo "\" type=\"image/x-icon\" />
<link rel=\"icon\"              sizes=\"192x192\"   href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAppleIcon", array(), "method"), "html", null, true);
        echo "\"/>
<link rel=\"apple-touch-icon\"  sizes=\"192x192\"   href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAppleIcon", array(), "method"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/header/parts/favicon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head", weight="80")*/
/*  #}*/
/* */
/* <link rel="shortcut icon" href="{{ this.getFavicon() }}" type="image/x-icon" />*/
/* <link rel="icon"              sizes="192x192"   href="{{ this.getAppleIcon() }}"/>*/
/* <link rel="apple-touch-icon"  sizes="192x192"   href="{{ this.getAppleIcon() }}">*/
/* */
