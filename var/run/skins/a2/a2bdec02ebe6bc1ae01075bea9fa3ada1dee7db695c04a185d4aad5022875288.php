<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/total.total.twig */
class __TwigTemplate_b222bbcbb229ae5568aceadea92e410d1818d857a1c1eff85a28d7bf4f5f1262 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"total\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getTotal", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/shopping_cart/parts/total.total.twig";
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
/*  # Shopping cart subtotal*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="30")*/
/*  #}*/
/* <li class="total">*/
/*   {{ widget('XLite\\View\\Surcharge', surcharge=this.cart.getTotal(), currency=this.cart.getCurrency()) }}*/
/* </li>*/
/* */
