<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/fraud_status/check.twig */
class __TwigTemplate_e245ef5f116fc6d4eb6d2ef8ee4d6cf2540c394c1e285f9933164caafaf7239b extends \XLite\Core\Templating\Twig\Template
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
            echo "
  ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getFraudCheckData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 9
                echo "
    <div class=\"kount-result\">

      <a name=\"fraud-info-";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "code", array()), "html", null, true);
                echo "\"></a>

      <h2>";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "service", array()), "html", null, true);
                echo " ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("result")), "html", null, true);
                echo "</h2>

      ";
                // line 16
                if ($this->getAttribute($context["data"], "errors", array())) {
                    // line 17
                    echo "        <div class=\"alert alert-danger\">
          <strong>";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Check was not performed due to error occurred!")), "html", null, true);
                    echo "</strong>
          <ul>
            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getErrorsList", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 21
                        echo "              <li>";
                        echo $context["error"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 23
                    echo "          </ul>
        </div>
      ";
                }
                // line 26
                echo "
      ";
                // line 27
                if ($this->getAttribute($context["data"], "warnings", array())) {
                    // line 28
                    echo "        <div class=\"alert alert-warning\">
          <strong>";
                    // line 29
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning!")), "html", null, true);
                    echo "</strong>
          <ul>
            ";
                    // line 31
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getWarningList", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                        // line 32
                        echo "              <li>";
                        echo $context["warning"];
                        echo "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['warning'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 34
                    echo "          </ul>
        </div>
      ";
                }
                // line 37
                echo "
      ";
                // line 38
                if ($this->getAttribute($context["data"], "getDisplayMessage", array(), "method")) {
                    // line 39
                    echo "        <p class=\"";
                    if ($this->getAttribute($context["data"], "isError", array(), "method")) {
                        echo "alert alert-danger";
                    } else {
                        echo "lead";
                    }
                    echo "\">
          ";
                    // line 40
                    if ($this->getAttribute($context["data"], "isError", array(), "method")) {
                        // line 41
                        echo "            <strong>";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Check was not performed due to error occurred!")), "html", null, true);
                        echo "</strong><br />
          ";
                    }
                    // line 43
                    echo "          ";
                    echo $this->getAttribute($context["data"], "getDisplayMessage", array(), "method");
                    echo "
  
          ";
                    // line 45
                    if ($this->getAttribute($context["data"], "score", array())) {
                        // line 46
                        echo "            ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score")), "html", null, true);
                        echo ": 
            <span class=\"lead ";
                        // line 47
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "scoreClass", array()), "html", null, true);
                        echo "\">";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "score", array()), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 49
                    echo "        </p>
      ";
                }
                // line 51
                echo "
      ";
                // line 52
                if ($this->getAttribute($context["data"], "serviceTransactionId", array())) {
                    // line 53
                    echo "        <p>
          
          ";
                    // line 55
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Transaction ID")), "html", null, true);
                    echo ":
  
          ";
                    // line 57
                    if ($this->getAttribute($context["data"], "url", array())) {
                        // line 58
                        echo "            <a href=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "url", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", array()), "html", null, true);
                        echo "</a>
          ";
                    } else {
                        // line 60
                        echo "            ";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["data"], "serviceTransactionId", array()), "html", null, true);
                        echo "
          ";
                    }
                    // line 62
                    echo "  
        </p>
      ";
                }
                // line 65
                echo "
      ";
                // line 66
                if ($this->getAttribute($context["data"], "rules", array())) {
                    // line 67
                    echo "
        <h3>";
                    // line 68
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Rules triggered")), "html", null, true);
                    echo ":</h3>

        <ul class=\"kount-result-lines\">
        ";
                    // line 71
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["data"], "getRulesList", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
                        // line 72
                        echo "          <li>";
                        echo $context["rule"];
                        echo "</li>
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 74
                    echo "        </ul>
      ";
                }
                // line 76
                echo "
      ";
                // line 89
                echo "
    </div>

  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "
<br/>

";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/fraud_status/check.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 93,  219 => 89,  216 => 76,  212 => 74,  203 => 72,  199 => 71,  193 => 68,  190 => 67,  188 => 66,  185 => 65,  180 => 62,  174 => 60,  166 => 58,  164 => 57,  159 => 55,  155 => 53,  153 => 52,  150 => 51,  146 => 49,  139 => 47,  134 => 46,  132 => 45,  126 => 43,  120 => 41,  118 => 40,  109 => 39,  107 => 38,  104 => 37,  99 => 34,  90 => 32,  86 => 31,  81 => 29,  78 => 28,  76 => 27,  73 => 26,  68 => 23,  59 => 21,  55 => 20,  50 => 18,  47 => 17,  45 => 16,  38 => 14,  33 => 12,  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fraud check results */
/*  #*/
/*  # @ListChild (list="order", weight="1100")*/
/*  #}*/
/* {% if this.order.getFraudCheckData() %}*/
/* */
/*   {% for data in this.order.getFraudCheckData() %}*/
/* */
/*     <div class="kount-result">*/
/* */
/*       <a name="fraud-info-{{ data.code }}"></a>*/
/* */
/*       <h2>{{ data.service }} {{ t('result') }}</h2>*/
/* */
/*       {% if data.errors %}*/
/*         <div class="alert alert-danger">*/
/*           <strong>{{ t('Check was not performed due to error occurred!') }}</strong>*/
/*           <ul>*/
/*             {% for error in data.getErrorsList() %}*/
/*               <li>{{ error|raw }}</li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if data.warnings %}*/
/*         <div class="alert alert-warning">*/
/*           <strong>{{ t('Warning!') }}</strong>*/
/*           <ul>*/
/*             {% for warning in data.getWarningList() %}*/
/*               <li>{{ warning|raw }}</li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       {% if data.getDisplayMessage() %}*/
/*         <p class="{% if data.isError() %}alert alert-danger{% else %}lead{% endif %}">*/
/*           {% if data.isError() %}*/
/*             <strong>{{ t('Check was not performed due to error occurred!') }}</strong><br />*/
/*           {% endif %}*/
/*           {{ data.getDisplayMessage()|raw }}*/
/*   */
/*           {% if data.score %}*/
/*             {{ t('Score') }}: */
/*             <span class="lead {{ data.scoreClass }}">{{ data.score }}</span>*/
/*           {% endif %}*/
/*         </p>*/
/*       {% endif %}*/
/* */
/*       {% if data.serviceTransactionId %}*/
/*         <p>*/
/*           */
/*           {{ t('Transaction ID') }}:*/
/*   */
/*           {% if data.url %}*/
/*             <a href="{{ data.url }}" target="_blank">{{ data.serviceTransactionId }}</a>*/
/*           {% else %}*/
/*             {{ data.serviceTransactionId }}*/
/*           {% endif %}*/
/*   */
/*         </p>*/
/*       {% endif %}*/
/* */
/*       {% if data.rules %}*/
/* */
/*         <h3>{{ t('Rules triggered') }}:</h3>*/
/* */
/*         <ul class="kount-result-lines">*/
/*         {% for rule in data.getRulesList() %}*/
/*           <li>{{ rule|raw }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/* */
/*       {# uncomment to show extra info*/
/*       {% if data.data %}*/
/* */
/*         <h3>{{ t('Additional information') }}:</h3>*/
/* */
/*         <ul class="kount-result-lines">*/
/*         {% for key, value in data.data %}*/
/*           <li>{{ key}}: {{ value|raw }}</li>*/
/*         {% endfor %}*/
/*         </ul>*/
/*       {% endif %}*/
/*       #}*/
/* */
/*     </div>*/
/* */
/*   {% endfor %}*/
/* */
/* <br/>*/
/* */
/* {% endif %}*/
/* */
