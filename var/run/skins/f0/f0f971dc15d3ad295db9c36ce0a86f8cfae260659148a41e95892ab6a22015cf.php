<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.search.twig */
class __TwigTemplate_8516c80a77a705c05094d06ca1d49e558d09f1f84f3aedf0df170e636f2b6217 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"search\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Form\\Product\\Search\\Customer\\Simple"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.search.twig";
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
/*  # Header bar search box*/
/*  #*/
/*  # @ListChild (list="layout.header.bar", weight="200")*/
/*  #}*/
/* <div id="search">*/
/*   {{ widget('\\XLite\\View\\Form\\Product\\Search\\Customer\\Simple') }}*/
/* </div>*/
/* */
