<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.total.twig */
class __TwigTemplate_959db52369e1430b9edce96aa2abadb7263866e2aa8c34c9fcb2119baacfcd90 extends \XLite\Core\Templating\Twig\Template
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
  <strong>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Total")), "html", null, true);
        echo ":</strong>
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getTotal", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart subtotal*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="30")*/
/*  #}*/
/* <li class="total">*/
/*   <strong>{{ t('Total') }}:</strong>*/
/*   {{ widget('XLite\\View\\Surcharge', surcharge=this.cart.getTotal(), currency=this.cart.getCurrency()) }}*/
/* </li>*/
/* */
