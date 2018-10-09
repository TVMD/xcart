<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/fraud_status/kount.twig */
class __TwigTemplate_6abaf723a2a3243872bbc32cc1c68fb74f9ec8c23c3adf1140d03e5428390aa4 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountData", array(), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method"))) {
            // line 9
            echo "  <div class=\"kount-result\">
  
    <a name=\"fraud-info-kount\"></a>
  
    <h2>";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("KOUNT Antifraud screening result")), "html", null, true);
            echo "</h2>
  
    ";
            // line 15
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountErrors", array(), "method")) {
                // line 16
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountErrors", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 17
                    echo "        <div class=\"alert alert-danger\">
          <strong>";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Error")), "html", null, true);
                    echo "!</strong>
            ";
                    // line 19
                    echo $context["error"];
                    echo "
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "    ";
            }
            // line 23
            echo "  
    ";
            // line 24
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountMessage", array(), "method")) {
                // line 25
                echo "      <p class=\"lead\">
        ";
                // line 26
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountMessage", array(), "method");
                echo ". ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score")), "html", null, true);
                echo ":
        <span class=\"lead ";
                // line 27
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountScoreClass", array(), "method"), "html", null, true);
                echo "\">
          ";
                // line 28
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountScore", array(), "method"), "html", null, true);
                echo "
        </span>
      </p>
    ";
            }
            // line 32
            echo "  
    ";
            // line 33
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountTransactionId", array(), "method")) {
                // line 34
                echo "      <p>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Transaction ID")), "html", null, true);
                echo ": ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountTransactionId", array(), "method"), "html", null, true);
                echo "</p>
    ";
            }
            // line 36
            echo "  
    ";
            // line 37
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountRules", array(), "method")) {
                // line 38
                echo "  
      <h3>";
                // line 39
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Rules triggered")), "html", null, true);
                echo ":</h3>
  
      <ul class=\"kount-result-lines\">
        ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountRules", array(), "method"));
                foreach ($context['_seq'] as $context["title"] => $context["value"]) {
                    // line 43
                    echo "          <li>";
                    echo $context["value"];
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['title'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "      </ul>
  
    ";
            }
            // line 48
            echo "  
  </div>
";
        }
        // line 51
        echo "
<br/>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/fraud_status/kount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  131 => 48,  126 => 45,  117 => 43,  113 => 42,  107 => 39,  104 => 38,  102 => 37,  99 => 36,  91 => 34,  89 => 33,  86 => 32,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  64 => 24,  61 => 23,  58 => 22,  49 => 19,  45 => 18,  42 => 17,  37 => 16,  35 => 15,  30 => 13,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Kount results */
/*  #*/
/*  #*/
/*  # @ListChild (list="order", weight="1000")*/
/*  #}*/
/* */
/* {% if this.getKountData() and not this.order.getFraudCheckData() %}*/
/*   <div class="kount-result">*/
/*   */
/*     <a name="fraud-info-kount"></a>*/
/*   */
/*     <h2>{{ t('KOUNT Antifraud screening result') }}</h2>*/
/*   */
/*     {% if this.getKountErrors() %}*/
/*       {% for error in this.getKountErrors() %}*/
/*         <div class="alert alert-danger">*/
/*           <strong>{{ t('Error') }}!</strong>*/
/*             {{ error|raw }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*   */
/*     {% if this.getKountMessage() %}*/
/*       <p class="lead">*/
/*         {{ this.getKountMessage()|raw }}. {{ t('Score') }}:*/
/*         <span class="lead {{ this.getKountScoreClass() }}">*/
/*           {{ this.getKountScore() }}*/
/*         </span>*/
/*       </p>*/
/*     {% endif %}*/
/*   */
/*     {% if this.getKountTransactionId() %}*/
/*       <p>{{ t('Transaction ID') }}: {{ this.getKountTransactionId() }}</p>*/
/*     {% endif %}*/
/*   */
/*     {% if this.getKountRules() %}*/
/*   */
/*       <h3>{{ t('Rules triggered') }}:</h3>*/
/*   */
/*       <ul class="kount-result-lines">*/
/*         {% for title, value in this.getKountRules() %}*/
/*           <li>{{ value|raw }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*   */
/*     {% endif %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
/* <br/>*/
/* */
