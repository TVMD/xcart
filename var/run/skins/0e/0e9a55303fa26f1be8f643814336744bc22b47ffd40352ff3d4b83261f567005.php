<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.twig */
class __TwigTemplate_5dd12f824e6e4ac158d76b65156c5a1146a707b2e2c8bae8958ce1e74cc2c716 extends \XLite\Core\Templating\Twig\Template
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
            echo "  <td class=\"address shipping\">
    <div class=\"wrapper";
            // line 9
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "trackingNumbers", array()), "isEmpty", array(), "method")) {
                echo " tracking-info-section-included";
            }
            echo "\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.bottom.method.shipping", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "billing_address", array()), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "shipping_address", array())))), "html", null, true);
            echo "
    </div>
  </td>
";
        }
        // line 14
        echo "
";
        // line 15
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isPaymentSectionVisible", array(), "method")) {
            // line 16
            echo "  <td class=\"address payment";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
                echo " payment-wrapping";
            }
            echo "\">
    <div class=\"wrapper\">
    ";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.bottom.method.payment", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "billing_address", array()), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "shipping_address", array())))), "html", null, true);
            echo "
    </div>
  </td>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 18,  45 => 16,  43 => 15,  40 => 14,  33 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice bottom block*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.lines", weight="10")*/
/*  #}*/
/* */
/* {% if this.order.isShippingSectionVisible() %}*/
/*   <td class="address shipping">*/
/*     <div class="wrapper{% if not this.order.trackingNumbers.isEmpty() %} tracking-info-section-included{% endif %}">*/
/*     {{ widget_list('invoice.bottom.method.shipping', baddress=this.order.profile.billing_address, saddress=this.order.profile.shipping_address) }}*/
/*     </div>*/
/*   </td>*/
/* {% endif %}*/
/* */
/* {% if this.order.isPaymentSectionVisible() %}*/
/*   <td class="address payment{% if this.order.isShippingSectionVisible() %} payment-wrapping{% endif %}">*/
/*     <div class="wrapper">*/
/*     {{ widget_list('invoice.bottom.method.payment', baddress=this.order.profile.billing_address, saddress=this.order.profile.shipping_address) }}*/
/*     </div>*/
/*   </td>*/
/* {% endif %}*/
/* */
