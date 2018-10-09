<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.subtotal.twig */
class __TwigTemplate_a75f176151bdacce422e24f6edd74f444d7c49c074f72b8e0dde30e901e2f07f extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-subtotal\">
  <span class=\"subtotal";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getExcludeSurcharges", array(), "method")) {
            echo " modified-subtotal";
        }
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getDisplayTotal", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
        echo "</span>
  ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getExcludeSurcharges", array(), "method")) {
            // line 9
            echo "    <div class=\"including-modifiers\" style=\"display: none;\">
      <table class=\"including-modifiers\" cellspacing=\"0\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getExcludeSurcharges", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["surcharge"]) {
                // line 12
                echo "          <tr>
            <td class=\"name\">";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Including X", array("name" => $this->getAttribute($context["surcharge"], "getName", array(), "method")))), "html", null, true);
                echo ":</td>
            <td class=\"value\">";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["surcharge"], "getValue", array(), "method"), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['surcharge'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "      </table>
    </div>
  ";
        }
        // line 20
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.item.actions", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 20,  56 => 17,  47 => 14,  43 => 13,  40 => 12,  36 => 11,  32 => 9,  30 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : subtotal*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="60")*/
/*  #}*/
/* <td class="item-subtotal">*/
/*   <span class="subtotal{% if this.item.getExcludeSurcharges() %} modified-subtotal{% endif %}">{{ widget('XLite\\View\\Surcharge', surcharge=this.item.getDisplayTotal(), currency=this.cart.getCurrency()) }}</span>*/
/*   {% if this.item.getExcludeSurcharges() %}*/
/*     <div class="including-modifiers" style="display: none;">*/
/*       <table class="including-modifiers" cellspacing="0">*/
/*         {% for surcharge in this.item.getExcludeSurcharges() %}*/
/*           <tr>*/
/*             <td class="name">{{ t('Including X', {'name': surcharge.getName()}) }}:</td>*/
/*             <td class="value">{{ widget('XLite\\View\\Surcharge', surcharge=surcharge.getValue(), currency=this.cart.getCurrency()) }}</td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </table>*/
/*     </div>*/
/*   {% endif %}*/
/*   {{ widget_list('cart.item.actions', item=this.item) }}*/
/* </td>*/
/* */
