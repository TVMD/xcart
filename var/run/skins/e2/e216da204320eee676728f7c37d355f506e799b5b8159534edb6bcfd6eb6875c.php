<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/language.twig */
class __TwigTemplate_8f41d6339c9090a4c08f77be55e44d598d8449ca489f433b443714ad42ad04a1 extends \XLite\Core\Templating\Twig\Template
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
<span class='language-indicator'>
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "currentLanguage", array()), "code", array()), "html", null, true);
        echo "
</span>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/locale/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Country part*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.locale", weight="20")*/
/*  #}*/
/* */
/* <span class='language-indicator'>*/
/* 	{{ this.currentLanguage.code }}*/
/* </span>*/
