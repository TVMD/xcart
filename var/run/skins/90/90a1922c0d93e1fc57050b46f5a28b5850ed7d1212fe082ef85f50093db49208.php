<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.twig */
class __TwigTemplate_27715e95729fe7b5cb3166519aea9e699ea9c52dfa269d0633afb01529f19f93 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAccountLinksVisible", array(), "method")) {
            // line 9
            echo "  <ul class=\"account-links \">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "layout.header.bar.links.newby"))), "html", null, true);
            echo "
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Header bar account links*/
/*  #*/
/*  # @ListChild (list="layout.header.bar", weight="100")*/
/*  # @ListChild (list="layout.responsive.account", weight="50")*/
/*  #}*/
/* */
/* {% if this.isAccountLinksVisible() %}*/
/*   <ul class="account-links ">*/
/*     {{ widget_list('layout.header.bar.links.newby') }}*/
/*   </ul>*/
/* {% endif %}*/
/* */
