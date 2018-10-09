<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/cart.twig */
class __TwigTemplate_b05c57c75d0b081a9db910132b97e90471214b08f634b415238f906eb4eb8384 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPayWithAmazonActive", array(), "method")) {
            // line 7
            echo "<li class=\"button\">
  <div id=\"payWithAmazonDiv_cart_btn\" class=\"pay-with-amazon-button\"></div>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/checkout_button/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Template*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="1000")*/
/*  #}*/
/* {% if this.isPayWithAmazonActive() %}*/
/* <li class="button">*/
/*   <div id="payWithAmazonDiv_cart_btn" class="pay-with-amazon-button"></div>*/
/* </li>*/
/* {% endif %}*/
/* */
