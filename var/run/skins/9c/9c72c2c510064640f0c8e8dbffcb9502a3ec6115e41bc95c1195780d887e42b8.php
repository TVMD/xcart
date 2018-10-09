<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/expired_keys.twig */
class __TwigTemplate_15d71694f3b8db1cd881d862c600342d82798e1c622d64b364f11f2b1dab62e1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasExpiredKeys", array(), "method")) {
            // line 8
            echo "  ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isNextStepAvailable", array(), "method")) {
                // line 9
                echo "    ";
                $context["buttonStyle"] = "regular-button";
                // line 10
                echo "  ";
            } else {
                // line 11
                echo "    ";
                $context["buttonStyle"] = "regular-main-button";
                // line 12
                echo "  ";
            }
            // line 13
            echo "  <div class=\"alert alert-warning expired-keys";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isNextStepAvailable", array(), "method")) {
                echo " next-step-available";
            }
            echo "\">
    <div>";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getExpiredKeysMessage", array(), "method"), "html", null, true);
            echo "</div>
    <table>
      <tbody>
        <tr>
          <th class=\"key-title\">";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("License key")), "html", null, true);
            echo "</th>
          <th class=\"key-exp-date\">";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Exp. date")), "html", null, true);
            echo "</th>
        </tr>
        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getExpiredKeys", array(), "method"));
            foreach ($context['_seq'] as $context["i"] => $context["k"]) {
                // line 22
                echo "          <tr>
            <td class=\"key-title\">";
                // line 23
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["k"], "title", array()), "html", null, true);
                echo "</td>
            <td class=\"key-exp-date\">";
                // line 24
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["k"], "expDate", array()), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['k'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "      </tbody>
    </table>
    <hr>
    <div class=\"actions\">
      ";
            // line 31
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAllKeysPurchaseURL", array(), "method")) {
                // line 32
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAllKeysPurchaseURL", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Renew your access to new features")), "style" => (isset($context["buttonStyle"]) ? $context["buttonStyle"] : null), "blank" => "true"))), "html", null, true);
                echo "
      ";
            }
            // line 34
            echo "      <div class=\"revalidate-keys\">
        ";
            // line 35
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ProgressState", "label" => "Re-validate license keys"))), "html", null, true);
            echo "
      </div>
    </div>
    <div class=\"clear\"></div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/expired_keys.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  96 => 34,  90 => 32,  88 => 31,  82 => 27,  73 => 24,  69 => 23,  66 => 22,  62 => 21,  57 => 19,  53 => 18,  46 => 14,  39 => 13,  36 => 12,  33 => 11,  30 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Trial upgrade notice*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.buttons.sections", weight="50")*/
/*  #}*/
/* */
/* {% if this.hasExpiredKeys() %}*/
/*   {% if this.isNextStepAvailable() %}*/
/*     {% set buttonStyle = 'regular-button' %}*/
/*   {% else %}*/
/*     {% set buttonStyle = 'regular-main-button' %}*/
/*   {% endif %}*/
/*   <div class="alert alert-warning expired-keys{% if this.isNextStepAvailable() %} next-step-available{% endif %}">*/
/*     <div>{{ this.getExpiredKeysMessage() }}</div>*/
/*     <table>*/
/*       <tbody>*/
/*         <tr>*/
/*           <th class="key-title">{{ t('License key') }}</th>*/
/*           <th class="key-exp-date">{{ t('Exp. date') }}</th>*/
/*         </tr>*/
/*         {% for i, k in this.getExpiredKeys() %}*/
/*           <tr>*/
/*             <td class="key-title">{{ k.title }}</td>*/
/*             <td class="key-exp-date">{{ k.expDate }}</td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     <hr>*/
/*     <div class="actions">*/
/*       {% if this.getAllKeysPurchaseURL() %}*/
/*         {{ widget('\\XLite\\View\\Button\\Link', location=this.getAllKeysPurchaseURL(), label=t('Renew your access to new features'), style=buttonStyle, blank='true') }}*/
/*       {% endif %}*/
/*       <div class="revalidate-keys">*/
/*         {{ widget('\\XLite\\View\\Button\\ProgressState', label='Re-validate license keys') }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/*   </div>*/
/* {% endif %}*/
/* */
