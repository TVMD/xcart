<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/payment.address.twig */
class __TwigTemplate_e63f3b50f2da9778c7baddf0858d1338afe8a46a9ccf1dcaaab0fc8c1e8cc11f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isBillingAddressVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"address\">
    <strong>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Billing address")), "html", null, true);
            echo "</strong>
  
    <div class=\"address-section payment-address-section\">";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "billingAddress"), "method"), "html", null, true);
            echo "</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/payment.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order's billing address*/
/*  #*/
/*  # @ListChild (list="order.payment", weight="200")*/
/*  #}*/
/* */
/* {% if this.isBillingAddressVisible() %}*/
/*   <div class="address">*/
/*     <strong>{{ t('Billing address') }}</strong>*/
/*   */
/*     <div class="address-section payment-address-section">{{ this.orderForm.displayComplexField('billingAddress') }}</div>*/
/*   </div>*/
/* {% endif %}*/
/* */
