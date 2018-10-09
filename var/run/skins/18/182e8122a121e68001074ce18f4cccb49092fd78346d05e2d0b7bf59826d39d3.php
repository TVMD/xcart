<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/action.transactions.twig */
class __TwigTemplate_a4bcade21d6ec92cd7794460d23020aef73aad850b9b1e6b6f3c1241cc87a483 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasPaymentTransactionSums", array(), "method")) {
            // line 8
            echo "  <ul class=\"payment-sums\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPaymentTransactionSums", array(), "method"));
            foreach ($context['_seq'] as $context["label"] => $context["sum"]) {
                // line 10
                echo "      <li>
        <span class=\"transaction-label\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["label"], "html", null, true);
                echo ":</span> <span class=\"cost\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $context["sum"], 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
                echo "</span>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['sum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/action.transactions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  34 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment transactions summary*/
/*  #*/
/*  # @ListChild (list="order.actions.paymentActionsRow", weight="100")*/
/*  #}*/
/* */
/* {% if this.hasPaymentTransactionSums() %}*/
/*   <ul class="payment-sums">*/
/*     {% for label, sum in this.getPaymentTransactionSums() %}*/
/*       <li>*/
/*         <span class="transaction-label">{{ label }}:</span> <span class="cost">{{ this.formatPrice(sum, this.order.getCurrency()) }}</span>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
