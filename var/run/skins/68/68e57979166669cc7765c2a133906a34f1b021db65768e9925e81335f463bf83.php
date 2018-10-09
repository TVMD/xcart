<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/addresses.purchaser.twig */
class __TwigTemplate_726098c90e7f91db66c6d43a81c43947364e5aa506722857b1583d4af638ddc3 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"address-data\">
  <ul cellspacing=\"0\" class=\"addresses\">

    ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
            // line 10
            echo "      <li class=\"address shipping\">
        <div class=\"wrapper";
            // line 11
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "trackingNumbers", array()), "isEmpty", array(), "method")) {
                echo " tracking-info-section-included";
            }
            echo "\">
          ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.addresses.shipping", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "billing_address", array()), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "shipping_address", array())))), "html", null, true);
            echo "
        </div>
      </li>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isPaymentSectionVisible", array(), "method")) {
            // line 18
            echo "      <li class=\"address payment";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
                echo " payment-wrapping";
            }
            echo "\">
        <div class=\"wrapper\">
          ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.addresses.billing", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "billing_address", array()), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "shipping_address", array())))), "html", null, true);
            echo "
        </div>
      </li>
    ";
        }
        // line 24
        echo "
  </ul>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/addresses.purchaser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 24,  55 => 20,  47 => 18,  45 => 17,  42 => 16,  35 => 12,  29 => 11,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice bottom block*/
/*  #*/
/*  # @ListChild (list="packing_slip.addresses", weight="10")*/
/*  #}*/
/* <td class="address-data">*/
/*   <ul cellspacing="0" class="addresses">*/
/* */
/*     {% if this.order.isShippingSectionVisible() %}*/
/*       <li class="address shipping">*/
/*         <div class="wrapper{% if not this.order.trackingNumbers.isEmpty() %} tracking-info-section-included{% endif %}">*/
/*           {{ widget_list('packing_slip.addresses.shipping', baddress=this.order.profile.billing_address, saddress=this.order.profile.shipping_address) }}*/
/*         </div>*/
/*       </li>*/
/*     {% endif %}*/
/* */
/*     {% if this.order.isPaymentSectionVisible() %}*/
/*       <li class="address payment{% if this.order.isShippingSectionVisible() %} payment-wrapping{% endif %}">*/
/*         <div class="wrapper">*/
/*           {{ widget_list('packing_slip.addresses.billing', baddress=this.order.profile.billing_address, saddress=this.order.profile.shipping_address) }}*/
/*         </div>*/
/*       </li>*/
/*     {% endif %}*/
/* */
/*   </ul>*/
/* </td>*/
/* */
