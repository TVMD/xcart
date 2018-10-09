<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/header.twig */
class __TwigTemplate_a827e82f06026f4cbc68e7a5ec652daf6b2063387b0bea185cee9ec31790eac8 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLandingPage", array(), "method")) {
            // line 7
            echo "  <h2>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Hot addons")), "html", null, true);
            echo "</h2>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Landing page header*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="400")*/
/*  #}*/
/* {% if this.isLandingPage() %}*/
/*   <h2>{{ t('Hot addons') }}</h2>*/
/* {% endif %}*/
/* */
