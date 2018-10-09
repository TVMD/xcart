<?php

/* /var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/bottom.statuses.twig */
class __TwigTemplate_4f6380d19b2a1f54b3fac3dc35c2eccbc52df086eed241e935bd1f9f9d8b6384 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
            // line 8
            echo "  ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingStatus", array(), "method")) {
                // line 9
                echo "    <td class=\"shipping-status\">
      <div class=\"wrapper\">
        <strong class=\"title\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping status")), "html", null, true);
                echo ":</strong>
        ";
                // line 12
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "shippingStatus", array()), "getCustomerName", array(), "method");
                echo "
      </div>
    </td>
  ";
            }
        }
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isPaymentSectionVisible", array(), "method")) {
            // line 19
            echo "  ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentStatus", array(), "method")) {
                // line 20
                echo "    <td class=\"payment-status\">
      <div class=\"wrapper\">
        <strong class=\"title\">";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Payment status")), "html", null, true);
                echo ":</strong>
        ";
                // line 23
                echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "paymentStatus", array()), "getCustomerName", array(), "method");
                echo "
      </div>
    </td>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/bottom.statuses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  55 => 22,  51 => 20,  48 => 19,  46 => 18,  43 => 17,  35 => 12,  31 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice bottom block*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.lines", weight="20")*/
/*  #}*/
/* */
/* {% if this.order.isShippingSectionVisible() %}*/
/*   {% if this.order.getShippingStatus() %}*/
/*     <td class="shipping-status">*/
/*       <div class="wrapper">*/
/*         <strong class="title">{{ t('Shipping status') }}:</strong>*/
/*         {{ this.order.shippingStatus.getCustomerName()|raw }}*/
/*       </div>*/
/*     </td>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* {% if this.order.isPaymentSectionVisible() %}*/
/*   {% if this.order.getPaymentStatus() %}*/
/*     <td class="payment-status">*/
/*       <div class="wrapper">*/
/*         <strong class="title">{{ t('Payment status') }}:</strong>*/
/*         {{ this.order.paymentStatus.getCustomerName()|raw }}*/
/*       </div>*/
/*     </td>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
