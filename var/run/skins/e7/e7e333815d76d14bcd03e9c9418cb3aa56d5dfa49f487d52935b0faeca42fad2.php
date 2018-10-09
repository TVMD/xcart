<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/checkout_buttons.twig */
class __TwigTemplate_1692d8663b9ebc9ce3ae16f12e0403d824f9a127dfa9a6e90580eacf8fb34d95 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"checkout-buttons\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.buttons.checkout"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/checkout_buttons.twig";
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
/*  # Checkout buttons*/
/*  #*/
/*  # @ListChild (list="cart.bottom.right", weight="20")*/
/*  #}*/
/* <div class="checkout-buttons">*/
/*   {{ widget_list('cart.buttons.checkout') }}*/
/* </div>*/
/* */
