<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.modifiers.twig */
class __TwigTemplate_d3654de1b97693d9e2abe1dce6feac751dfb136c476f8bd217346231baa7b540 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"modifiers\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurchargeTotals", array(), "method"));
        foreach ($context['_seq'] as $context["sType"] => $context["surcharge"]) {
            // line 9
            echo "    <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurchargeClassName", array(0 => $context["sType"], 1 => $context["surcharge"]), "method"), "html", null, true);
            echo "\">
      ";
            // line 10
            if (($this->getAttribute($context["surcharge"], "count", array()) == "1")) {
                // line 11
                echo "        <span class=\"name\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "lastName", array()), "html", null, true);
                echo ":</span>
      ";
            } else {
                // line 13
                echo "        <span class=\"name list-owner\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "name", array()), "html", null, true);
                echo ":</span>
      ";
            }
            // line 15
            echo "      ";
            if ($this->getAttribute($context["surcharge"], "available", array())) {
                // line 16
                echo "        <span class=\"value\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatSurcharge", array(0 => $context["surcharge"]), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
                echo "</span>
        <div class=\"surcharge-info-wrapper\">
            ";
                // line 19
                echo "            ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.review.surcharge.info", "surcharge" => $context["surcharge"]))), "html", null, true);
                echo "
        </div>
      ";
            } else {
                // line 22
                echo "        <span class=\"value\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("n/a")), "html", null, true);
                echo "</span>
      ";
            }
            // line 24
            echo "      ";
            if (($this->getAttribute($context["surcharge"], "count", array()) == "1")) {
                // line 25
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "modifier", "type" => "nested", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "cart" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array())))), "html", null, true);
                echo "
      ";
            } else {
                // line 27
                echo "        <div style=\"display: none;\" class=\"order-modifier-details\">
          <ul>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getExcludeSurchargesByType", array(0 => $context["sType"]), "method"));
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 30
                    echo "              <li>
                <span class=\"name\">";
                    // line 31
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["row"], "getName", array(), "method"), "html", null, true);
                    echo ":</span>
                <span class=\"value\">";
                    // line 32
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "getValue", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
                    echo "</span>
              </li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 35
                echo "          </ul>
        </div>
      ";
            }
            // line 38
            echo "    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sType'], $context['surcharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.modifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 40,  106 => 38,  101 => 35,  92 => 32,  88 => 31,  85 => 30,  81 => 29,  77 => 27,  71 => 25,  68 => 24,  62 => 22,  55 => 19,  49 => 16,  46 => 15,  40 => 13,  34 => 11,  32 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Checkout : order review step : items : subtotal*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.items", weight="30")*/
/*  #}*/
/* */
/* <ul class="modifiers">*/
/*   {% for sType, surcharge in this.getSurchargeTotals() %}*/
/*     <li class="{{ this.getSurchargeClassName(sType, surcharge) }}">*/
/*       {% if surcharge.count == '1' %}*/
/*         <span class="name">{{ surcharge.lastName }}:</span>*/
/*       {% else %}*/
/*         <span class="name list-owner">{{ surcharge.name }}:</span>*/
/*       {% endif %}*/
/*       {% if surcharge.available %}*/
/*         <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=this.formatSurcharge(surcharge), currency=this.cart.getCurrency()) }}</span>*/
/*         <div class="surcharge-info-wrapper">*/
/*             {# Refer to \XLite\View\SurchargeInfo\CODSurchargeInfo as an example #}*/
/*             {{ widget_list('checkout.review.surcharge.info', surcharge=surcharge) }}*/
/*         </div>*/
/*       {% else %}*/
/*         <span class="value">{{ t('n/a') }}</span>*/
/*       {% endif %}*/
/*       {% if surcharge.count == '1' %}*/
/*         {{ widget_list('modifier', type='nested', surcharge=surcharge, sType=sType, cart=this.cart) }}*/
/*       {% else %}*/
/*         <div style="display: none;" class="order-modifier-details">*/
/*           <ul>*/
/*             {% for row in this.getExcludeSurchargesByType(sType) %}*/
/*               <li>*/
/*                 <span class="name">{{ row.getName() }}:</span>*/
/*                 <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=row.getValue(), currency=this.cart.getCurrency()) }}</span>*/
/*               </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*     </li>*/
/*   {% endfor %}*/
/* */
/* </ul>*/
/* */
