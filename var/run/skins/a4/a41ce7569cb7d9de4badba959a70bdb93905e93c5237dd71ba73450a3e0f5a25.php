<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.total.twig */
class __TwigTemplate_3b37c720515d8e72b9ef7a068681c28b12f5549a0675116edc9396761f4e7fce extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"total clearfix\">
  <span class=\"name\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Total")), "html", null, true);
        echo ":</span>
  <span class=\"value\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getTotal", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Checkout : order review step : items : total*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.items", weight="40")*/
/*  # @ListChild (list="checkout.review.inactive.items", weight="40")*/
/*  #}*/
/* <div class="total clearfix">*/
/*   <span class="name">{{ t('Total') }}:</span>*/
/*   <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=this.cart.getTotal(), currency=this.cart.getCurrency()) }}</span>*/
/* </div>*/
/* */
