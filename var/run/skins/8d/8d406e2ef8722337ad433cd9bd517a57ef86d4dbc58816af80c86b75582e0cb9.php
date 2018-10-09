<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/cartItems.includedModifiers.twig */
class __TwigTemplate_a454cd8ae027c8c1b49810acc96094f3d900caba6c492e57d177b9ed44824bd7 extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getItemsIncludeSurchargesTotals", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "  <li class='included-surcharge'>
    <strong>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Including X", array("name" => $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getName", array(), "method")))), "html", null, true);
            echo ":</strong>
    <span class=\"value\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "cost", array()), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
            echo "
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/cartItems.includedModifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  29 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart: cart items subtotal*/
/*  #*/
/*  # @ListChild (list="cart.totals", weight="30")*/
/*  #}*/
/* */
/* {% for row in this.cart.getItemsIncludeSurchargesTotals(1) %}*/
/*   <li class='included-surcharge'>*/
/*     <strong>{{ t('Including X', {'name': row.surcharge.getName()}) }}:</strong>*/
/*     <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=row.cost, currency=this.cart.getCurrency()) }}*/
/*   </li>*/
/* {% endfor %}*/
/* */
