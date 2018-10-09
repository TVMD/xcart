<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/order/parts/shipping.name.twig */
class __TwigTemplate_1a23cd556ae263df2b85c8304554241253de9747e20bb8778ace9aafe76e9b0b extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"shipping-method-name shipping-method-spec-element\">
  <li class=\"shipping-method-wrapper\">
    <span class=\"shipping-method-label\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping method")), "html", null, true);
        echo ":</span><span
            class=\"shipping-method-name\">";
        // line 10
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingMethodName", array(), "method");
        echo "</span>
  </li>
  ";
        // line 12
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "trackingNumbers", array()), "isEmpty", array(), "method")) {
            // line 13
            echo "    <li class=\"tracking-number-wrapper\">
      <span class=\"tracking-number-label\">";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Tracking numbers")), "html", null, true);
            echo ":</span>

      <div class=\"tracking-number-box\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "trackingNumbers", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["number"]) {
                // line 18
                echo "
          <span class=\"tracking-item\">
          ";
                // line 20
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationURL", array(0 => $this->getAttribute($context["number"], "value", array())), "method")) {
                    // line 21
                    echo "            ";
                    if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isTrackingInformationForm", array(0 => $this->getAttribute($context["number"], "value", array())), "method")) {
                        // line 22
                        echo "              <form method=\"";
                        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationMethod", array(0 => $this->getAttribute($context["number"], "value", array())), "method");
                        echo "\"
                    action=\"";
                        // line 23
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationURL", array(0 => $this->getAttribute($context["number"], "value", array())), "method"), "html", null, true);
                        echo "\" target=\"_blank\">
            ";
                        // line 24
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationParams", array(0 => $this->getAttribute($context["number"], "value", array())), "method"));
                        foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                            // line 25
                            echo "              <input type=\"hidden\" name=\"";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                            echo "\" value=\"";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["value"], "html", null, true);
                            echo "\"/>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 27
                        echo "                <span>";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", array()), "html", null, true);
                        echo " - </span>
            <button type=\"submit\">";
                        // line 28
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Track package")), "html", null, true);
                        echo "</button>
          </form>
          ";
                    } else {
                        // line 31
                        echo "              <span>";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", array()), "html", null, true);
                        echo " - </span>
              <a href=\"";
                        // line 32
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTrackingInformationURL", array(0 => $this->getAttribute($context["number"], "value", array())), "method"), "html", null, true);
                        echo "\"
                 target=\"_blank\">";
                        // line 33
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Track package")), "html", null, true);
                        echo "</a>
            ";
                    }
                    // line 35
                    echo "          ";
                } else {
                    // line 36
                    echo "            ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["number"], "value", array()), "html", null, true);
                    echo "
          ";
                }
                // line 38
                echo "          </span><br/>

        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['number'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </div>
    </li>
  ";
        }
        // line 44
        echo "
</ul>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/order/parts/shipping.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 44,  123 => 41,  115 => 38,  109 => 36,  106 => 35,  101 => 33,  97 => 32,  92 => 31,  86 => 28,  81 => 27,  70 => 25,  66 => 24,  62 => 23,  57 => 22,  54 => 21,  52 => 20,  48 => 18,  44 => 17,  38 => 14,  35 => 13,  33 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Orders list item : spec : break line*/
/*  #*/
/*  # @ListChild (list="orders.children.shipping", weight="100")*/
/*  #}*/
/* */
/* <ul class="shipping-method-name shipping-method-spec-element">*/
/*   <li class="shipping-method-wrapper">*/
/*     <span class="shipping-method-label">{{ t('Shipping method') }}:</span><span*/
/*             class="shipping-method-name">{{ this.order.getShippingMethodName()|raw }}</span>*/
/*   </li>*/
/*   {% if not this.order.trackingNumbers.isEmpty() %}*/
/*     <li class="tracking-number-wrapper">*/
/*       <span class="tracking-number-label">{{ t('Tracking numbers') }}:</span>*/
/* */
/*       <div class="tracking-number-box">*/
/*         {% for number in this.order.trackingNumbers %}*/
/* */
/*           <span class="tracking-item">*/
/*           {% if this.order.getTrackingInformationURL(number.value) %}*/
/*             {% if this.order.isTrackingInformationForm(number.value) %}*/
/*               <form method="{{ this.order.getTrackingInformationMethod(number.value)|raw }}"*/
/*                     action="{{ this.order.getTrackingInformationURL(number.value) }}" target="_blank">*/
/*             {% for name, value in this.order.getTrackingInformationParams(number.value) %}*/
/*               <input type="hidden" name="{{ name }}" value="{{ value }}"/>*/
/*             {% endfor %}*/
/*                 <span>{{ number.value }} - </span>*/
/*             <button type="submit">{{ t('Track package') }}</button>*/
/*           </form>*/
/*           {% else %}*/
/*               <span>{{ number.value }} - </span>*/
/*               <a href="{{ this.order.getTrackingInformationURL(number.value) }}"*/
/*                  target="_blank">{{ t('Track package') }}</a>*/
/*             {% endif %}*/
/*           {% else %}*/
/*             {{ number.value }}*/
/*           {% endif %}*/
/*           </span><br/>*/
/* */
/*         {% endfor %}*/
/*       </div>*/
/*     </li>*/
/*   {% endif %}*/
/* */
/* </ul>*/
