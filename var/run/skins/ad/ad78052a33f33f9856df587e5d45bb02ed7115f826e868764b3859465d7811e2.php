<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/button.continue.twig */
class __TwigTemplate_b8e3f215fc40a2c745c2a8f2445bb8bd0b6ba2a94c11dca5da7351373a599b56 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\ContinueShopping"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/button.continue.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Clear bag button*/
/*  #*/
/*  # @ListChild (list="cart.panel", weight="10")*/
/*  # @ListChild (list="cart.children", weight="10")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\ContinueShopping') }}*/
/* */
