<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/totals.twig */
class __TwigTemplate_37b9db885125eeaaf408e1b261ddd5e6edebead18b45b95eabb93e9b5adfdb21 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"sums\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.totals"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/totals.twig";
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
/*  # Shopping cart totals block*/
/*  #*/
/*  # @ListChild (list="cart.children", weight="30")*/
/*  #}*/
/* <ul class="sums">*/
/*   {{ widget_list('cart.totals') }}*/
/* </ul>*/
/* */
