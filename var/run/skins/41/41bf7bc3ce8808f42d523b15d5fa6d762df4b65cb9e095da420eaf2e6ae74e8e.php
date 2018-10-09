<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.shipping.twig */
class __TwigTemplate_260cd5dc4c2afe4770192174359ad3c2e450c893a8f0e740d6d21b627a271b52 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"method-box\">
  <strong class=\"method-title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping method")), "html", null, true);
        echo "</strong>
  ";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShippingModifier", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shippingModifier", array()), "getMethod", array(), "method"))) {
            // line 9
            echo "    ";
            echo $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shippingModifier", array()), "method", array()), "getName", array(), "method");
            echo "
  ";
        } elseif ($this->getAttribute($this->getAttribute(        // line 10
(isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingMethodName", array(), "method")) {
            // line 11
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingMethodName", array(), "method")));
            echo "
  ";
        } else {
            // line 13
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("n/a")), "html", null, true);
            echo "
  ";
        }
        // line 15
        echo "
  ";
        // line 16
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "trackingNumbers", array()), "isEmpty", array(), "method")) {
            // line 17
            echo "    <div class=\"tracking-number-box\">
      <strong class=\"method-title\">";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Tracking numbers")), "html", null, true);
            echo "</strong>
      <ul class=\"tracking-number-list\">
        ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "trackingNumbers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
                // line 21
                echo "          <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "getValue", array(), "method"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </ul>
    </div>
  ";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 26,  73 => 23,  64 => 21,  60 => 20,  55 => 18,  52 => 17,  50 => 16,  47 => 15,  41 => 13,  35 => 11,  33 => 10,  28 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice shipping methods*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.method.shipping", weight="20")*/
/*  #}*/
/* <div class="method-box">*/
/*   <strong class="method-title">{{ t('Shipping method') }}</strong>*/
/*   {% if this.getShippingModifier() and this.shippingModifier.getMethod() %}*/
/*     {{ this.shippingModifier.method.getName()|raw }}*/
/*   {% elseif this.order.getShippingMethodName() %}*/
/*     {{ t(this.order.getShippingMethodName())|raw }}*/
/*   {% else %}*/
/*     {{ t('n/a') }}*/
/*   {% endif %}*/
/* */
/*   {% if not this.order.trackingNumbers.isEmpty() %}*/
/*     <div class="tracking-number-box">*/
/*       <strong class="method-title">{{ t('Tracking numbers') }}</strong>*/
/*       <ul class="tracking-number-list">*/
/*         {% for number in this.order.trackingNumbers %}*/
/*           <li>{{ number.getValue() }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
