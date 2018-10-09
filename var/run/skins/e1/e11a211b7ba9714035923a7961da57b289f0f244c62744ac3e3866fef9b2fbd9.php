<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/main.header.twig */
class __TwigTemplate_d5205a62d243ff326f7f8b734defcee4df7e6f6d5958ca251b0c93ac619cf99a extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"header-area\">
  <div class=\"desktop-header\">
  \t<div class=\"container\">
\t    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header"))), "html", null, true);
        echo "
\t  </div>
  </div>
  ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.mobile"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/main.header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Header*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="200")*/
/*  #}*/
/* <div id="header-area">*/
/*   <div class="desktop-header">*/
/*   	<div class="container">*/
/* 	    {{ widget_list('layout.header') }}*/
/* 	  </div>*/
/*   </div>*/
/*   {{ widget_list('layout.header.mobile') }}*/
/* </div>*/
/* */
