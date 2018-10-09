<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.disabled.reason.twig */
class __TwigTemplate_63c14989e72384a54845e5b8381cf48d63cb0f999c56fc6600420ef32cb4805d extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "checkCart", array(), "method")) {
            // line 7
            echo "  <li class=\"disabled-reason\">
    <div class=\"reason-details\">";
            // line 8
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDisabledReason", array(), "method");
            echo "</div>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.disabled.reason.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart Go to checkout button*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="50")*/
/*  #}*/
/* {% if not this.cart.checkCart() %}*/
/*   <li class="disabled-reason">*/
/*     <div class="reason-details">{{ this.getDisabledReason()|raw }}</div>*/
/*   </li>*/
/* {% endif %}*/
/* */
