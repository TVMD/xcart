<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.modifiers.twig */
class __TwigTemplate_effed51afd8c33f1593f551b6f2af71d642c837a3ee488a53566b227332a2b3e extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurchargeTotals", array(), "method"));
        foreach ($context['_seq'] as $context["sType"] => $context["surcharge"]) {
            // line 8
            echo "  <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurchargeClassName", array(0 => $context["sType"], 1 => $context["surcharge"]), "method"), "html", null, true);
            echo "\">
    ";
            // line 9
            if (($this->getAttribute($context["surcharge"], "count", array()) == "1")) {
                // line 10
                echo "      <strong>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "lastName", array()), "html", null, true);
                echo ":</strong>
    ";
            } else {
                // line 12
                echo "      <strong class=\"list-owner\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "name", array()), "html", null, true);
                echo ":</strong>
    ";
            }
            // line 14
            echo "    ";
            if ($this->getAttribute($context["surcharge"], "available", array())) {
                // line 15
                echo "      <span class=\"value\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatSurcharge", array(0 => $context["surcharge"]), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
                echo "</span>
    ";
            } else {
                // line 17
                echo "      <span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("n/a")), "html", null, true);
                echo "</span>
    ";
            }
            // line 19
            echo "    ";
            if (($this->getAttribute($context["surcharge"], "count", array()) == "1")) {
                // line 20
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "modifier", "type" => "nested", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "cart" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array())))), "html", null, true);
                echo "
    ";
            } else {
                // line 22
                echo "      <div style=\"display: none;\" class=\"order-modifier-details\">
        <ul>
          ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getExcludeSurchargesByType", array(0 => $context["sType"]), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 25
                    echo "            <li>
              <span class=\"name\">";
                    // line 26
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["row"], "getName", array(), "method"), "html", null, true);
                    echo ":</span>
              <span class=\"value\">";
                    // line 27
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "getValue", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
                    echo "</span>
            </li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 30
                echo "        </ul>
      </div>
    ";
            }
            // line 33
            echo "  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sType'], $context['surcharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.modifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 33,  93 => 30,  84 => 27,  80 => 26,  77 => 25,  73 => 24,  69 => 22,  63 => 20,  60 => 19,  54 => 17,  48 => 15,  45 => 14,  39 => 12,  33 => 10,  31 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart modifiers*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="20")*/
/*  #}*/
/* */
/* {% for sType, surcharge in this.getSurchargeTotals() %}*/
/*   <li class="{{ this.getSurchargeClassName(sType, surcharge) }}">*/
/*     {% if surcharge.count == '1' %}*/
/*       <strong>{{ surcharge.lastName }}:</strong>*/
/*     {% else %}*/
/*       <strong class="list-owner">{{ surcharge.name }}:</strong>*/
/*     {% endif %}*/
/*     {% if surcharge.available %}*/
/*       <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=this.formatSurcharge(surcharge), currency=this.cart.getCurrency()) }}</span>*/
/*     {% else %}*/
/*       <span>{{ t('n/a') }}</span>*/
/*     {% endif %}*/
/*     {% if surcharge.count == '1' %}*/
/*       {{ widget_list('modifier', type='nested', surcharge=surcharge, sType=sType, cart=this.cart) }}*/
/*     {% else %}*/
/*       <div style="display: none;" class="order-modifier-details">*/
/*         <ul>*/
/*           {% for row in this.getExcludeSurchargesByType(sType) %}*/
/*             <li>*/
/*               <span class="name">{{ row.getName() }}:</span>*/
/*               <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=row.getValue(), currency=this.cart.getCurrency()) }}</span>*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     {% endif %}*/
/*   </li>*/
/* {% endfor %}*/
/* */
