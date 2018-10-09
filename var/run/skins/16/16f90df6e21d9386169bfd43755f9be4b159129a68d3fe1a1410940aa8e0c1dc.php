<?php

/* /var/www/next/output/xcart/src/skins/mail/common/modules/CDev/XPaymentsConnector/kount.twig */
class __TwigTemplate_9e6f32deec8cd66df819b13cc3b5815f8d1a0eeda33b061ca304dcd2c0013c89 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayKountResult", array(), "method") &&  !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method"))) {
            // line 7
            echo "<table>
  <tr>
    <td colspan=\"3\" style=\"background: #f9f9f9; padding: 15px;\">
  
    <h2 style=\"font-weight: normal; font-size: 24px; margin: 18px 0;\">";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("KOUNT Antifraud screening result")), "html", null, true);
            echo "</h2>
  
    ";
            // line 13
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountErrors", array(), "method")) {
                // line 14
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountErrors", array(), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 15
                    echo "        <div style=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountErrorStyle", array(), "method"), "html", null, true);
                    echo "\">
          <strong>";
                    // line 16
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Error")), "html", null, true);
                    echo "!</strong>
            ";
                    // line 17
                    echo $context["error"];
                    echo "
        </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 20
                echo "    ";
            }
            // line 21
            echo "  
    ";
            // line 22
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountMessage", array(), "method")) {
                // line 23
                echo "      <p style=\"font-size: 15px; line-height: 20px;\">
        ";
                // line 24
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountMessage", array(), "method");
                echo ". ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score")), "html", null, true);
                echo ":
        <span class=\"lead ";
                // line 25
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountScoreClass", array(), "method"), "html", null, true);
                echo "\">
          ";
                // line 26
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountScore", array(), "method"), "html", null, true);
                echo "
        </span>
      </p>
    ";
            }
            // line 30
            echo "  
    ";
            // line 31
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountTransactionId", array(), "method")) {
                // line 32
                echo "      <p style=\"font-size: 15px; line-height: 20px;\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Transaction ID")), "html", null, true);
                echo ": ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountTransactionId", array(), "method"), "html", null, true);
                echo "</p>
    ";
            }
            // line 34
            echo "  
    ";
            // line 35
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountRules", array(), "method")) {
                // line 36
                echo "  
      <h3 style=\"line-height: 50px; font-size: 18px; font-weight: normal;\">";
                // line 37
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Rules triggered")), "html", null, true);
                echo ":</h3>
  
      <ul class=\"kount-result-lines\">
        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountRules", array(), "method"));
                foreach ($context['_seq'] as $context["title"] => $context["value"]) {
                    // line 41
                    echo "          <li style=\"font-size: 15px; line-height: 20px;\">";
                    echo $context["value"];
                    echo "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['title'], $context['value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "      </ul>
  
    ";
            }
            // line 46
            echo "  
    </td>
  </tr>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/modules/CDev/XPaymentsConnector/kount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 46,  125 => 43,  116 => 41,  112 => 40,  106 => 37,  103 => 36,  101 => 35,  98 => 34,  90 => 32,  88 => 31,  85 => 30,  78 => 26,  74 => 25,  68 => 24,  65 => 23,  63 => 22,  60 => 21,  57 => 20,  48 => 17,  44 => 16,  39 => 15,  34 => 14,  32 => 13,  27 => 11,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Kount result on the invoice*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="60")*/
/*  #}*/
/* {% if this.isDisplayKountResult() and not this.order.getFraudCheckData() %}*/
/* <table>*/
/*   <tr>*/
/*     <td colspan="3" style="background: #f9f9f9; padding: 15px;">*/
/*   */
/*     <h2 style="font-weight: normal; font-size: 24px; margin: 18px 0;">{{ t('KOUNT Antifraud screening result') }}</h2>*/
/*   */
/*     {% if this.getKountErrors() %}*/
/*       {% for error in this.getKountErrors() %}*/
/*         <div style="{{ this.getKountErrorStyle() }}">*/
/*           <strong>{{ t('Error') }}!</strong>*/
/*             {{ error|raw }}*/
/*         </div>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*   */
/*     {% if this.getKountMessage() %}*/
/*       <p style="font-size: 15px; line-height: 20px;">*/
/*         {{ this.getKountMessage()|raw }}. {{ t('Score') }}:*/
/*         <span class="lead {{ this.getKountScoreClass() }}">*/
/*           {{ this.getKountScore() }}*/
/*         </span>*/
/*       </p>*/
/*     {% endif %}*/
/*   */
/*     {% if this.getKountTransactionId() %}*/
/*       <p style="font-size: 15px; line-height: 20px;">{{ t('Transaction ID') }}: {{ this.getKountTransactionId() }}</p>*/
/*     {% endif %}*/
/*   */
/*     {% if this.getKountRules() %}*/
/*   */
/*       <h3 style="line-height: 50px; font-size: 18px; font-weight: normal;">{{ t('Rules triggered') }}:</h3>*/
/*   */
/*       <ul class="kount-result-lines">*/
/*         {% for title, value in this.getKountRules() %}*/
/*           <li style="font-size: 15px; line-height: 20px;">{{ value|raw }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*   */
/*     {% endif %}*/
/*   */
/*     </td>*/
/*   </tr>*/
/* </table>*/
/* {% endif %}*/
/* */
