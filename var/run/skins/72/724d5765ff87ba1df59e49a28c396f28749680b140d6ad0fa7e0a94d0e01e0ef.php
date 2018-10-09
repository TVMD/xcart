<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/items.twig */
class __TwigTemplate_2d7f46a5f29b749653c41c6fd1cf96d33a9f7c2141e67e6c91bc8ef86ad4997a extends \XLite\Core\Templating\Twig\Template
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

  <h4 class=\"title\">
    <a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart")), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Last added items", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "countQuantity", array(), "method")))), "html", null, true);
        echo "</a>
  </h4>

  ";
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasItems", array(), "method")) {
            // line 13
            echo "    <ul class=\"cart-items\">
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsList", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "        <li class=\"cart-item\">
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
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("See all items in the cart", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "countQuantity", array(), "method")))), "html", null, true);
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

  <div class=\"buttons-row\">
    ";
        // line 32
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "minicart.horizontal.buttons"))), "html", null, true);
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  80 => 28,  76 => 27,  72 => 25,  64 => 23,  62 => 22,  59 => 21,  55 => 19,  46 => 16,  43 => 15,  39 => 14,  36 => 13,  34 => 12,  26 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Horizontal minicart items block*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.children", weight="10")*/
/*  #}*/
/* <div {{ this.printTagAttributes(this.getItemsContainerAttributes())|raw }}>*/
/* */
/*   <h4 class="title">*/
/*     <a href="{{ url('cart') }}">{{ t('Last added items', {'count': this.cart.countQuantity()}) }}</a>*/
/*   </h4>*/
/* */
/*   {% if this.hasItems() %}*/
/*     <ul class="cart-items">*/
/*       {% for item in this.getItemsList() %}*/
/*         <li class="cart-item">*/
/*           {{ widget_list('minicart.horizontal.item', item=item) }}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/*   {% if this.isTruncated() %}*/
/*     <p class="other-items"><a href="{{ url('cart') }}">{{ t('See all items in the cart', {'count': this.cart.countQuantity()}) }}</a></p>*/
/*   {% endif %}*/
/* */
/*   <p class="subtotal">*/
/*     <strong>{{ t('Subtotal') }}:</strong>*/
/*     <span>{{ this.formatPrice(this.cart.getDisplaySubtotal(), this.cart.getCurrency(), 1) }}</span>*/
/*   </p>*/
/* */
/*   <div class="buttons-row">*/
/*     {{ widget_list('minicart.horizontal.buttons') }}*/
/*   </div>*/
/* */
/* </div>*/
/* */
