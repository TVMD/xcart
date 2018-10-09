<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/links.twig */
class __TwigTemplate_51dad3eb48a4dd1d64f88bd26c359d4aa5536c0f6da8c6830e0d5a636f7508eb extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "slidebar.additional-menu.links"), "method")) {
            // line 9
            echo "    ";
            ob_start();
            // line 10
            echo "    <ul class='quick-links'>
    \t";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "slidebar.additional-menu.links"))), "html", null, true);
            echo "
    </ul>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/links.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Quick links*/
/*  #*/
/*  # @ListChild (list="slidebar.additional-menu", weight="100")*/
/*  # @ListChild (list="layout.header.right.settings", weight="100")*/
/*  #}*/
/* */
/* {% if this.getViewList('slidebar.additional-menu.links') %}*/
/*     {% spaceless %}*/
/*     <ul class='quick-links'>*/
/*     	{{ widget_list('slidebar.additional-menu.links') }}*/
/*     </ul>*/
/*     {% endspaceless %}*/
/* {% endif %}*/
/* */
