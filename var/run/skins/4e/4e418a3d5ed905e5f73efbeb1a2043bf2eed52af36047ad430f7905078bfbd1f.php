<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.paid.twig */
class __TwigTemplate_106a955e0c060bde7502cae6ec709c7c5c542f3369dbde848a370925bd5c4171 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPartiallyPaid", array(), "method")) {
            // line 8
            echo "  <div class=\"paid clearfix\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Paid")), "html", null, true);
            echo ":
    <span class=\"value\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getPaidTotal", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
            echo "</span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.paid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  21 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Checkout : order review step : items : paid*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.items", weight="50")*/
/*  # @ListChild (list="checkout.review.inactive.items", weight="50")*/
/*  #}*/
/* {% if this.isPartiallyPaid() %}*/
/*   <div class="paid clearfix">*/
/*     {{ t('Paid') }}:*/
/*     <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=this.cart.getPaidTotal(), currency=this.cart.getCurrency()) }}</span>*/
/*   </div>*/
/* {% endif %}*/
/* */
