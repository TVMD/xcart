<?php

/* layout/content/center.twig */
class __TwigTemplate_b5794777b0c00ba40959d762591fc827911239d04fa7e85a72db44012ba8e446 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "center.top"))), "html", null, true);
        echo "

";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTitleVisible", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"))) {
            // line 8
            echo "  <h1 class=\"title\" id=\"page-title\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMainTitle", array(), "method"), "html", null, true);
            echo "</h1>
";
        }
        // line 10
        echo "
";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("layout/content/center_top.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 11
        $this->loadTemplate("layout/content/center_top.twig", "layout/content/center.twig", 11)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 12
        echo "
";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "center.bottom"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "layout/content/center.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  48 => 12,  43 => 11,  35 => 10,  29 => 8,  27 => 7,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Center column*/
/*  #}*/
/* */
/* {{ widget_list('center.top') }}*/
/* */
/* {% if this.isTitleVisible() and this.getTitle() %}*/
/*   <h1 class="title" id="page-title">{{ this.getMainTitle() }}</h1>*/
/* {% endif %}*/
/* */
/* {% include 'layout/content/center_top.twig' %}*/
/* */
/* {{ widget_list('center.bottom') }}*/
/* */
