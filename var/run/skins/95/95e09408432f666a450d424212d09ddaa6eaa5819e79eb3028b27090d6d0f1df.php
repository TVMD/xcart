<?php

/* /var/www/next/output/xcart/src/skins/customer/mini_cart/horizontal/parts/items.twig */
class __TwigTemplate_41db54d2eff8bb5965f1b8d175e53e08158bc168fcaad36200750cc4ba476957 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsContainerAttributes", array(), "method")), "method");
        echo ">

  <p class=\"title\">
    <a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart")), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X items in bag", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "countQuantity", array(), "method")))), "html", null, true);
        echo "</a>
  </p>

  ";
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasItems", array(), "method")) {
            // line 13
            echo "    <ul>
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsList", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "        <li>
          ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "minicart.horizontal.item", "item" => $context["item"]))), "html", null, true);
                echo "
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </ul>
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTruncated", array(), "method")) {
            // line 23
            echo "    <p class=\"other-items\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Other items")), "html", null, true);
            echo "</a></p>
  ";
        }
        // line 25
        echo "
  <p class=\"subtotal\">
    <strong>";
        // line 27
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Subtotal")), "html", null, true);
        echo ":</strong>
    <span>";
        // line 28
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getDisplaySubtotal", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method"), 2 => 1), "method"), "html", null, true);
        echo "</span>
  </p>

  <hr />

  <div class=\"buttons-row\">
    ";
        // line 34
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "minicart.horizontal.buttons"))), "html", null, true);
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/mini_cart/horizontal/parts/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 34,  80 => 28,  76 => 27,  72 => 25,  64 => 23,  62 => 22,  59 => 21,  55 => 19,  46 => 16,  43 => 15,  39 => 14,  36 => 13,  34 => 12,  26 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Horizontal minicart items block*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.children", weight="10")*/
/*  #}*/
/* <div {{ this.printTagAttributes(this.getItemsContainerAttributes())|raw }}>*/
/* */
/*   <p class="title">*/
/*     <a href="{{ url('cart') }}">{{ t('X items in bag', {'count': this.cart.countQuantity()}) }}</a>*/
/*   </p>*/
/* */
/*   {% if this.hasItems() %}*/
/*     <ul>*/
/*       {% for item in this.getItemsList() %}*/
/*         <li>*/
/*           {{ widget_list('minicart.horizontal.item', item=item) }}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/*   {% if this.isTruncated() %}*/
/*     <p class="other-items"><a href="{{ url('cart') }}">{{ t('Other items') }}</a></p>*/
/*   {% endif %}*/
/* */
/*   <p class="subtotal">*/
/*     <strong>{{ t('Subtotal') }}:</strong>*/
/*     <span>{{ this.formatPrice(this.cart.getDisplaySubtotal(), this.cart.getCurrency(), 1) }}</span>*/
/*   </p>*/
/* */
/*   <hr />*/
/* */
/*   <div class="buttons-row">*/
/*     {{ widget_list('minicart.horizontal.buttons') }}*/
/*   </div>*/
/* */
/* </div>*/
/* */
