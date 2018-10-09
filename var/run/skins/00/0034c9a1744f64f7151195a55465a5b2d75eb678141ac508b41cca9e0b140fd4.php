<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.payment.twig */
class __TwigTemplate_959559e615d003c75c1a82b1c24cf7219cdefe308ef1fdea926b3b559b56193e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"method-box\">
  <strong class=\"method-title\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Payment method")), "html", null, true);
        echo "</strong>
  ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getVisiblePaymentMethods", array(), "method")) {
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getVisiblePaymentMethods", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 11
                echo "      ";
                echo $this->getAttribute($context["m"], "getTitle", array(), "method");
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  ";
        } elseif ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentMethodName", array(), "method")) {
            // line 14
            echo "    ";
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentMethodName", array(), "method")));
            echo "
  ";
        } else {
            // line 16
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("n/a")), "html", null, true);
            echo "
  ";
        }
        // line 18
        echo "  <p><br /></p>
  ";
        // line 19
        if (( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isOfflineProcessorUsed", array(), "method") && $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentTransactionId", array(), "method"))) {
            // line 20
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Transaction ID")), "html", null, true);
            echo ": ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentTransactionId", array(), "method"), "html", null, true);
            echo "
  ";
        }
        // line 22
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getPaymentTransactionData", array(0 => 1), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "    <div class=\"sub-data\">
      <strong class=\"title\">";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["item"], "title", array()))), "html", null, true);
            echo "</strong>
      <span class=\"value\">";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "value", array()), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "  <div class=\"sub-data\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.methods.payment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  83 => 25,  79 => 24,  76 => 23,  71 => 22,  63 => 20,  61 => 19,  58 => 18,  52 => 16,  46 => 14,  43 => 13,  34 => 11,  29 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice payment methods*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.method.payment", weight="20")*/
/*  #}*/
/* */
/* <div class="method-box">*/
/*   <strong class="method-title">{{ t('Payment method') }}</strong>*/
/*   {% if this.order.getVisiblePaymentMethods() %}*/
/*     {% for m in this.order.getVisiblePaymentMethods() %}*/
/*       {{ m.getTitle()|raw }}*/
/*     {% endfor %}*/
/*   {% elseif this.order.getPaymentMethodName() %}*/
/*     {{ t(this.order.getPaymentMethodName())|raw }}*/
/*   {% else %}*/
/*     {{ t('n/a') }}*/
/*   {% endif %}*/
/*   <p><br /></p>*/
/*   {% if (not this.order.isOfflineProcessorUsed()) and this.order.getPaymentTransactionId() %}*/
/*     {{ t('Transaction ID') }}: {{ this.order.getPaymentTransactionId() }}*/
/*   {% endif %}*/
/*   {% for item in this.order.getPaymentTransactionData(1) %}*/
/*     <div class="sub-data">*/
/*       <strong class="title">{{ t(item.title) }}</strong>*/
/*       <span class="value">{{ item.value }}</span>*/
/*     </div>*/
/*   {% endfor %}*/
/*   <div class="sub-data"></div>*/
/* </div>*/
/* */
