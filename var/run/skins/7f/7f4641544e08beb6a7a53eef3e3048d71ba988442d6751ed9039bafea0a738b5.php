<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/parts/cart.totals.twig */
class __TwigTemplate_586e56d5a1e24ea1eed1e135bbf74564df0c8f4a3eba55b8a4f3bd4fe2713cb0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"cart-sums\">
  <li>
    <em>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subtotal")), "html", null, true);
        echo ":</em>
    <span>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getSubtotal", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method"), 2 => 1), "method"), "html", null, true);
        echo "</span>
  </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/parts/cart.totals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Checkout items totals block*/
/*  #*/
/*  # @ListChild (list="checkout.cart", weight="20")*/
/*  #}*/
/* <ul class="cart-sums">*/
/*   <li>*/
/*     <em>{{ t('Subtotal') }}:</em>*/
/*     <span>{{ this.formatPrice(this.cart.getSubtotal(), this.cart.getCurrency(), 1) }}</span>*/
/*   </li>*/
/* </ul>*/
/* */
