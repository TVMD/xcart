<?php

/* main.twig */
class __TwigTemplate_b847200a074c9aa07bd3f609ffbd408722a2e6c50602e5da38da9a5755824f86 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDeveloperMode", array(), "method")) {
            // line 6
            echo "  <div id=\"profiler-messages\"></div>
";
        }
        // line 8
        echo "
";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.slidebar"))), "html", null, true);
        echo "


<div id=\"page-wrapper\">
  <div id=\"page\" class=\"";
        // line 13
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isForceChangePassword", array(), "method")) {
            echo "force-change-password-page";
        }
        echo "\">
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.main"))), "html", null, true);
        echo "
  </div>
  ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.footer"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 16,  44 => 14,  38 => 13,  31 => 9,  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Layout*/
/*  #}*/
/* */
/* {% if this.isDeveloperMode() %}*/
/*   <div id="profiler-messages"></div>*/
/* {% endif %}*/
/* */
/* {{ widget_list('layout.slidebar') }}*/
/* */
/* */
/* <div id="page-wrapper">*/
/*   <div id="page" class="{% if this.isForceChangePassword() %}force-change-password-page{% endif %}">*/
/*     {{ widget_list('layout.main') }}*/
/*   </div>*/
/*   {{ widget_list('layout.footer') }}*/
/* </div>*/
/* */
