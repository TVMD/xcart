<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.twig */
class __TwigTemplate_3de19f57af424f040a3e9a055c4300445351caf31325a2d934820af21e0f3c55 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAccountLinksVisible", array(), "method") &&  !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutLayout", array(), "method"))) {
            // line 8
            echo "  <div class=\"header_bar-sign_in\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PopupLogin", "label" => "Sign in / sign up"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header bar account links*/
/*  #*/
/*  # @ListChild (list="layout.header.bar", weight="100")*/
/*  #}*/
/* */
/* {% if this.isAccountLinksVisible() and not this.isCheckoutLayout() %}*/
/*   <div class="header_bar-sign_in">*/
/*     {{ widget('XLite\\View\\Button\\PopupLogin', label='Sign in / sign up') }}*/
/*   </div>*/
/* {% endif %}*/
