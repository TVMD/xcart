<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/payment.method.twig */
class __TwigTemplate_a1a892af18a92776d8ecc99576c69c453c6174c1b3d093c67591fecde1a869cc extends \XLite\Core\Templating\Twig\Template
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
<div class=\"method\">
  <ul>
    ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "getComplexField", array(0 => "paymentMethods"), "method")) {
            // line 10
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "getComplexField", array(0 => "paymentMethods"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
                // line 11
                echo "        <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "    ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentMethodName", array(), "method")) {
            // line 14
            echo "      <li class=\"method-name\">";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentMethodName", array(), "method")));
            echo "</li>
    ";
        } else {
            // line 16
            echo "      <li class=\"method-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("n/a")), "html", null, true);
            echo "</li>
    ";
        }
        // line 18
        echo "  </ul>
  ";
        // line 19
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentTransactionId", array(), "method")) {
            // line 20
            echo "    <p class='transaction'>
      ";
            // line 21
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Transaction ID")), "html", null, true);
            echo ": <br>
      ";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentTransactionId", array(), "method"), "html", null, true);
            echo "
    </p>
  ";
        }
        // line 25
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "getComplexField", array(0 => "paymentData"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 26
            echo "    <div class=\"payment-method-data\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
            echo "</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/payment.method.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 28,  78 => 26,  73 => 25,  67 => 22,  63 => 21,  60 => 20,  58 => 19,  55 => 18,  49 => 16,  43 => 14,  40 => 13,  31 => 11,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Order's payment method*/
/*  #*/
/*  # @ListChild (list="order.payment", weight="100")*/
/*  #}*/
/* */
/* <div class="method">*/
/*   <ul>*/
/*     {% if this.orderForm.getComplexField('paymentMethods') %}*/
/*       {% for w in this.orderForm.getComplexField('paymentMethods') %}*/
/*         <li>{{ w.display() }}</li>*/
/*       {% endfor %}*/
/*     {% elseif this.order.getPaymentMethodName() %}*/
/*       <li class="method-name">{{ t(this.order.getPaymentMethodName())|raw }}</li>*/
/*     {% else %}*/
/*       <li class="method-name">{{ t('n/a') }}</li>*/
/*     {% endif %}*/
/*   </ul>*/
/*   {% if this.order.getPaymentTransactionId() %}*/
/*     <p class='transaction'>*/
/*       {{ t('Transaction ID') }}: <br>*/
/*       {{ this.order.getPaymentTransactionId() }}*/
/*     </p>*/
/*   {% endif %}*/
/*   {% for w in this.orderForm.getComplexField('paymentData') %}*/
/*     <div class="payment-method-data">{{ w.display() }}</div>*/
/*   {% endfor %}*/
/* </div>*/
/* */
