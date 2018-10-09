<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/actions.twig */
class __TwigTemplate_c910af1ac03c32ff97ccb8e40115b92fc16b946e3cb8404dd9ad6342be918b55 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\StickyPanel\\ZoneDetails"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/actions.twig";
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
/*  # Zone details actions block template*/
/*  #*/
/*  # @ListChild (list="zones.zone", weight="300")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\StickyPanel\\ZoneDetails') }}*/
/* */
