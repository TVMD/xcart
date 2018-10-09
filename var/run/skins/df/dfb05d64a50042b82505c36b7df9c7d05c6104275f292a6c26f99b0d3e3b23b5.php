<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/content/main.center.twig */
class __TwigTemplate_672f1e3bbb2f14ec838930461949ed7bcac4d2b49e48428ec5e7c25def428504 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"main-wrapper\">
  ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isForceChangePassword", array(), "method")) {
            // line 9
            echo "  <div id=\"main\" class=\"force-change-password-section clearfix\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Popup\\ForceChangePassword"))), "html", null, true);
            echo "
  </div>
  ";
        } else {
            // line 13
            echo "  <div id=\"main\" class=\"clearfix\">
    <div class=\"flex-container\">
        ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main.center"))), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/content/main.center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 19,  38 => 15,  34 => 13,  28 => 10,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Center zone*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="400")*/
/*  #}*/
/* */
/* <div id="main-wrapper">*/
/*   {% if this.isForceChangePassword() %}*/
/*   <div id="main" class="force-change-password-section clearfix">*/
/*       {{ widget('\\XLite\\View\\Popup\\ForceChangePassword') }}*/
/*   </div>*/
/*   {% else %}*/
/*   <div id="main" class="clearfix">*/
/*     <div class="flex-container">*/
/*         {{ widget_list('layout.main.center') }}*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
