<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/panel.totals.twig */
class __TwigTemplate_ee605700c3bf5659288c2f04b4384ae1b083bc42ef29aa15c6d56140975a6be8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"totals\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.panel.totals"))), "html", null, true);
        echo "
  <li class=\"clearfix\"></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/panel.totals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart totals panel*/
/*  #*/
/*  # @ListChild (list="cart.panel", weight="10")*/
/*  #}*/
/* <ul class="totals">*/
/*   {{ widget_list('cart.panel.totals') }}*/
/*   <li class="clearfix"></li>*/
/* </ul>*/
/* */
