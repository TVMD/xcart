<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/header.right.twig */
class __TwigTemplate_0cf826452da18e8f0584ab2bf4e2b20181f33f4a86b2a273fcdaaec45e20100c extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method")) {
            // line 7
            echo "  <div id=\"header\" class=\"header-right-bar\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.right", "displayMode" => "horizontal"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/header.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header right box*/
/*  #*/
/*  # @ListChild (list="layout.header", weight="200")*/
/*  #}*/
/* {% if not this.isCheckoutLayout() %}*/
/*   <div id="header" class="header-right-bar">*/
/*     {{ widget_list('layout.header.right', displayMode='horizontal') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
