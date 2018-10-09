<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.twig */
class __TwigTemplate_d63f3d5b87cd29960362e9c5cb20f88268d3963905f130e8a82054b1bacc3ffe extends \XLite\Core\Templating\Twig\Template
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
<td class=\"left-adresses-part\">
  <table cellspacing=\"0\" class=\"addresses";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
            echo " S";
        }
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isPaymentSectionVisible", array(), "method")) {
            echo " B";
        }
        echo "\">
    <tr>
      ";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
            // line 11
            echo "        <td class=\"address shipping\">
          <div class=\"wrapper";
            // line 12
            if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "trackingNumbers", array()), "isEmpty", array(), "method")) {
                echo " tracking-info-section-included";
            }
            echo "\">
          ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.bottom.address.shipping", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "billing_address", array()), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "shipping_address", array())))), "html", null, true);
            echo "
          </div>
        </td>
      ";
        }
        // line 17
        echo "
      ";
        // line 18
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isPaymentSectionVisible", array(), "method")) {
            // line 19
            echo "        <td class=\"address payment";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
                echo " payment-wrapping";
            }
            echo "\">
          <div class=\"wrapper\">
          ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.bottom.address.billing", "baddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "billing_address", array()), "saddress" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "shipping_address", array())))), "html", null, true);
            echo "
          </div>
        </td>
      ";
        }
        // line 25
        echo "    </tr>

    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "invoice.bottom.lines", 1 => array("order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()))), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 28
            echo "      <tr>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
            echo "</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "invoice.bottom", 1 => array("order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()))), "method")) {
            // line 32
            echo "      <tr>
        ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "invoice.bottom", 1 => array("order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()))), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 34
                echo "          <td>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "      </tr>
    ";
        }
        // line 38
        echo "    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("order/invoice/parts/bottom.padding.twig");        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate("order/invoice/parts/bottom.padding.twig", "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.twig", 38)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 39
        echo "  </table>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 39,  113 => 38,  109 => 36,  100 => 34,  96 => 33,  93 => 32,  91 => 31,  88 => 30,  79 => 28,  75 => 27,  71 => 25,  64 => 21,  56 => 19,  54 => 18,  51 => 17,  44 => 13,  38 => 12,  35 => 11,  33 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice bottom block*/
/*  #*/
/*  # @ListChild (list="invoice.subhead", weight="10")*/
/*  #}*/
/* */
/* <td class="left-adresses-part">*/
/*   <table cellspacing="0" class="addresses{% if this.order.isShippingSectionVisible() %} S{% endif %}{% if this.order.isPaymentSectionVisible() %} B{% endif %}">*/
/*     <tr>*/
/*       {% if this.order.isShippingSectionVisible() %}*/
/*         <td class="address shipping">*/
/*           <div class="wrapper{% if not this.order.trackingNumbers.isEmpty() %} tracking-info-section-included{% endif %}">*/
/*           {{ widget_list('invoice.bottom.address.shipping', baddress=this.order.profile.billing_address, saddress=this.order.profile.shipping_address) }}*/
/*           </div>*/
/*         </td>*/
/*       {% endif %}*/
/* */
/*       {% if this.order.isPaymentSectionVisible() %}*/
/*         <td class="address payment{% if this.order.isShippingSectionVisible() %} payment-wrapping{% endif %}">*/
/*           <div class="wrapper">*/
/*           {{ widget_list('invoice.bottom.address.billing', baddress=this.order.profile.billing_address, saddress=this.order.profile.shipping_address) }}*/
/*           </div>*/
/*         </td>*/
/*       {% endif %}*/
/*     </tr>*/
/* */
/*     {% for w in this.getViewList('invoice.bottom.lines', {'order': this.order}) %}*/
/*       <tr>{{ w.display() }}</tr>*/
/*     {% endfor %}*/
/* */
/*     {% if this.getViewList('invoice.bottom', {'order': this.order}) %}*/
/*       <tr>*/
/*         {% for w in this.getViewList('invoice.bottom', {'order': this.order}) %}*/
/*           <td>{{ w.display() }}</td>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     {% endif %}*/
/*     {% include "order/invoice/parts/bottom.padding.twig" %}*/
/*   </table>*/
/* </td>*/
/* */
