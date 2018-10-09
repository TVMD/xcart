<?php

/* layout/header/navbar.desktop.twig */
class __TwigTemplate_ce7840d3a178425abba556f958f0c01787df95972534fcb1a3c60e639a512cfe extends \XLite\Core\Templating\Twig\Template
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
<div class=\"navbar navbar-inverse mobile-hidden\" role=\"navigation\" data-desktop-navbar>
    ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shouldRender", array(), "method")) {
            // line 7
            echo "    <div class=\"collapse navbar-collapse\">
      ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.menu"))), "html", null, true);
            echo "
      ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.menu.after"))), "html", null, true);
            echo "
    </div>
    ";
        }
        // line 12
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "layout/header/navbar.desktop.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  32 => 9,  28 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Desktop navbar (moved from top_menu.twig)*/
/*  #}*/
/* */
/* <div class="navbar navbar-inverse mobile-hidden" role="navigation" data-desktop-navbar>*/
/*     {% if this.shouldRender() %}*/
/*     <div class="collapse navbar-collapse">*/
/*       {{ widget_list('header.menu') }}*/
/*       {{ widget_list('header.menu.after') }}*/
/*     </div>*/
/*     {% endif %}*/
/* </div>*/
