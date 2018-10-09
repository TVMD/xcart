<?php

/* main.twig */
class __TwigTemplate_f2bf05e9ddf1f75bb5db20a7cfc33d27709f376806fc6e14f9c0265ad31943ab extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDeveloperMode", array(), "method")) {
            // line 5
            echo "  <div id=\"profiler-messages\"></div>
";
        }
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\TopMessage"))), "html", null, true);
        echo "

<div id=\"page-wrapper\">

  ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("body/header.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 12
        $this->loadTemplate("body/header.twig", "main.twig", 12)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 13
        echo "
  <div id=\"page-container\">
    ";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isSidebarFirstVisible", array(), "method")) {
            // line 16
            echo "      <div id=\"sidebar-first\" class=\"side-bar\">
        ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.content.left"))), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 20
        echo "
    <div id=\"main\">
      ";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.content.center"))), "html", null, true);
        echo "

      ";
        // line 24
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViewListVisible", array(0 => "admin.main.page.content.sub_section"), "method")) {
            // line 25
            echo "        <div id=\"sub-section\">
          ";
            // line 26
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin.main.page.content.sub_section"))), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 29
        echo "
      ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("body/footer.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        // line 30
        $this->loadTemplate("body/footer.twig", "main.twig", 30)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 31
        echo "    </div>

  </div>

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
        return array (  93 => 31,  88 => 30,  80 => 29,  74 => 26,  71 => 25,  69 => 24,  64 => 22,  60 => 20,  54 => 17,  51 => 16,  49 => 15,  45 => 13,  40 => 12,  28 => 8,  25 => 7,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Main template*/
/*  #}*/
/* {% if this.isDeveloperMode() %}*/
/*   <div id="profiler-messages"></div>*/
/* {% endif %}*/
/* */
/* {{ widget('\\XLite\\View\\TopMessage') }}*/
/* */
/* <div id="page-wrapper">*/
/* */
/*   {% include 'body/header.twig' %}*/
/* */
/*   <div id="page-container">*/
/*     {% if this.layout.isSidebarFirstVisible() %}*/
/*       <div id="sidebar-first" class="side-bar">*/
/*         {{ widget_list('admin.main.page.content.left') }}*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div id="main">*/
/*       {{ widget_list('admin.main.page.content.center') }}*/
/* */
/*       {% if this.isViewListVisible('admin.main.page.content.sub_section') %}*/
/*         <div id="sub-section">*/
/*           {{ widget_list('admin.main.page.content.sub_section') }}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% include 'body/footer.twig' %}*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* */
