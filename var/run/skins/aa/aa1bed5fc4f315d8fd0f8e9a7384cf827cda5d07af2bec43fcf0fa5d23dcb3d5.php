<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/instruction.twig */
class __TwigTemplate_39a694b8ccc0698a511379bdfeeed47a20c0584fdccc5ae3bd977981f184e450 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPaymentInstructions", array(), "method")) {
            // line 8
            echo "  <div class=\"payment-instruction\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPaymentInstructions", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["method"]) {
                // line 10
                echo "      <p>";
                echo $this->getAttribute($context["method"], "getInstruction", array(), "method");
                echo "</p>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['method'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/instruction.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice payment instruction*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="55")*/
/*  #}*/
/* */
/* {% if this.getPaymentInstructions() %}*/
/*   <div class="payment-instruction">*/
/*     {% for method in this.getPaymentInstructions() %}*/
/*       <p>{{ method.getInstruction()|raw }}</p>*/
/*     {% endfor %}*/
/*   </div>*/
/* {% endif %}*/
/* */
