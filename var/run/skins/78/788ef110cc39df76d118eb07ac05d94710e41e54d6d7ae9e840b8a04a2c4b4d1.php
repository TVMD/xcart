<?php

/* body/header.twig */
class __TwigTemplate_5a32e90ceacbab3c4fcf5c62048c8fd5b258833bda8a9b1b868ebcec998527a9 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div id=\"header-wrapper\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header_wrapper"))), "html", null, true);
        echo "
  <div id=\"header\">
    <div class=\"left-menu-header\">
      ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header.left"))), "html", null, true);
        echo "
    </div>
    <div class=\"main-header\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header"))), "html", null, true);
        echo "
    </div>
    <div class=\"main-header-right\">
      ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.header.right"))), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "body/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  35 => 12,  29 => 9,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Header*/
/*  #}*/
/* */
/* <div id="header-wrapper">*/
/*   {{ widget_list('admin.main.page.header_wrapper') }}*/
/*   <div id="header">*/
/*     <div class="left-menu-header">*/
/*       {{ widget_list('admin.main.page.header.left') }}*/
/*     </div>*/
/*     <div class="main-header">*/
/*       {{ widget_list('admin.main.page.header') }}*/
/*     </div>*/
/*     <div class="main-header-right">*/
/*       {{ widget_list('admin.main.page.header.right') }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
