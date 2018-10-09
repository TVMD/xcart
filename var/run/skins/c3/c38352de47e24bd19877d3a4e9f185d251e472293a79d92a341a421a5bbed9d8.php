<?php

/* /var/www/next/output/xcart/src/skins/mail/common/modules/CDev/XPaymentsConnector/fraud_check.twig */
class __TwigTemplate_62ca5fa742275373fc64ecbf8bf36b77b5feebb8a29450e428733b70554da2c5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method")) {
            // line 7
            echo "<table>
  ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "    ";
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method")) {
                    // line 10
                    echo "      <tr>
  
        <td colspan=\"3\" style=\"background: #f9f9f9; padding: 15px;\">
  
          <h2 style=\"font-weight: normal; font-size: 24px; margin: 18px 0;\">";
                    // line 14
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["data"], "service", array()))), "html", null, true);
                    echo "</h2>
  
          ";
                    // line 16
                    if ($this->getAttribute($context["data"], "errors", array())) {
                        // line 17
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getErrorsList", array(), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 18
                            echo "              <div style=\"";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKountErrorStyle", array(), "method"), "html", null, true);
                            echo "\">
                <strong>";
                            // line 19
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Error")), "html", null, true);
                            echo "!</strong>
                  ";
                            // line 20
                            echo $context["error"];
                            echo "
              </div>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "          ";
                    }
                    // line 24
                    echo "  
          ";
                    // line 25
                    if ($this->getAttribute($context["data"], "warnings", array())) {
                        // line 26
                        echo "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getWarningList", array(), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                            // line 27
                            echo "              <div style=\"font-size: 15px; line-height: 20px;\">
                <strong>";
                            // line 28
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning")), "html", null, true);
                            echo "!</strong>
                  ";
                            // line 29
                            echo $context["warning"];
                            echo "
              </div>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 32
                        echo "          ";
                    }
                    // line 33
                    echo "  
          ";
                    // line 34
                    if ($this->getAttribute($context["data"], "getDisplayMessage", array(), "method")) {
                        // line 35
                        echo "            <p style=\"font-size: 15px; line-height: 20px;\">
              ";
                        // line 36
                        echo $this->getAttribute($context["data"], "getDisplayMessage", array(), "method");
                        echo ".
    
              ";
                        // line 38
                        if ($this->getAttribute($context["data"], "score", array())) {
                            // line 39
                            echo "                ";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score")), "html", null, true);
                            echo ":
                <span class=\"lead ";
                            // line 40
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "scoreClass", array()), "html", null, true);
                            echo "\">";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "score", array()), "html", null, true);
                            echo "</span>
              ";
                        }
                        // line 42
                        echo "            </p>
          ";
                    }
                    // line 44
                    echo "  
          ";
                    // line 45
                    if ($this->getAttribute($context["data"], "serviceTransactionId", array())) {
                        // line 46
                        echo "            <p style=\"font-size: 15px; line-height: 20px;\">
    
              ";
                        // line 48
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Transaction ID")), "html", null, true);
                        echo ":
    
              ";
                        // line 50
                        if ($this->getAttribute($context["data"], "url", array())) {
                            // line 51
                            echo "                <a href=\"";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "url", array()), "html", null, true);
                            echo "\" target=\"_blank\">";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", array()), "html", null, true);
                            echo "</a>
              ";
                        } else {
                            // line 53
                            echo "                ";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", array()), "html", null, true);
                            echo "
              ";
                        }
                        // line 55
                        echo "    
            </p>
          ";
                    }
                    // line 58
                    echo "  
          ";
                    // line 59
                    if ($this->getAttribute($context["data"], "rules", array())) {
                        // line 60
                        echo "  
            <h3 style=\"line-height: 50px; font-size: 18px; font-weight: normal;\">";
                        // line 61
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Rules triggered")), "html", null, true);
                        echo ":</h3>
  
            <ul class=\"kount-result-lines\">
              ";
                        // line 64
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getRulesList", array(), "method"));
                        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                            // line 65
                            echo "                <li style=\"font-size: 15px; line-height: 20px;\">";
                            echo $context["rule"];
                            echo "</li>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 67
                        echo "            </ul>
          ";
                    }
                    // line 69
                    echo "  
        </td>
  
      </tr>
    ";
                }
                // line 74
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "</table>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/modules/CDev/XPaymentsConnector/fraud_check.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 75,  203 => 74,  196 => 69,  192 => 67,  183 => 65,  179 => 64,  173 => 61,  170 => 60,  168 => 59,  165 => 58,  160 => 55,  154 => 53,  146 => 51,  144 => 50,  139 => 48,  135 => 46,  133 => 45,  130 => 44,  126 => 42,  119 => 40,  114 => 39,  112 => 38,  107 => 36,  104 => 35,  102 => 34,  99 => 33,  96 => 32,  87 => 29,  83 => 28,  80 => 27,  75 => 26,  73 => 25,  70 => 24,  67 => 23,  58 => 20,  54 => 19,  49 => 18,  44 => 17,  42 => 16,  37 => 14,  31 => 10,  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fraud check result on the invoice*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="60")*/
/*  #}*/
/* {% if this.order.getFraudCheckData() %}*/
/* <table>*/
/*   {% for data in this.order.getFraudCheckData() %}*/
/*     {% if this.order.getFraudCheckData() %}*/
/*       <tr>*/
/*   */
/*         <td colspan="3" style="background: #f9f9f9; padding: 15px;">*/
/*   */
/*           <h2 style="font-weight: normal; font-size: 24px; margin: 18px 0;">{{ t(data.service) }}</h2>*/
/*   */
/*           {% if data.errors %}*/
/*             {% for error in data.getErrorsList() %}*/
/*               <div style="{{ this.getKountErrorStyle() }}">*/
/*                 <strong>{{ t('Error') }}!</strong>*/
/*                   {{ error|raw }}*/
/*               </div>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*   */
/*           {% if data.warnings %}*/
/*             {% for warning in data.getWarningList() %}*/
/*               <div style="font-size: 15px; line-height: 20px;">*/
/*                 <strong>{{ t('Warning') }}!</strong>*/
/*                   {{ warning|raw }}*/
/*               </div>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*   */
/*           {% if data.getDisplayMessage() %}*/
/*             <p style="font-size: 15px; line-height: 20px;">*/
/*               {{ data.getDisplayMessage()|raw }}.*/
/*     */
/*               {% if data.score %}*/
/*                 {{ t('Score') }}:*/
/*                 <span class="lead {{ data.scoreClass }}">{{ data.score }}</span>*/
/*               {% endif %}*/
/*             </p>*/
/*           {% endif %}*/
/*   */
/*           {% if data.serviceTransactionId %}*/
/*             <p style="font-size: 15px; line-height: 20px;">*/
/*     */
/*               {{ t('Transaction ID') }}:*/
/*     */
/*               {% if data.url %}*/
/*                 <a href="{{ data.url }}" target="_blank">{{ data.serviceTransactionId }}</a>*/
/*               {% else %}*/
/*                 {{ data.serviceTransactionId }}*/
/*               {% endif %}*/
/*     */
/*             </p>*/
/*           {% endif %}*/
/*   */
/*           {% if data.rules %}*/
/*   */
/*             <h3 style="line-height: 50px; font-size: 18px; font-weight: normal;">{{ t('Rules triggered') }}:</h3>*/
/*   */
/*             <ul class="kount-result-lines">*/
/*               {% for rule in data.getRulesList() %}*/
/*                 <li style="font-size: 15px; line-height: 20px;">{{ rule|raw }}</li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           {% endif %}*/
/*   */
/*         </td>*/
/*   */
/*       </tr>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* </table>*/
/* {% endif %}*/
/* */
