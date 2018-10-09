<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/items.twig */
class __TwigTemplate_409f29feef5bbce23a08051b5b168852e3f715634f3d6c0bd259408a29e83ca0 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<table class=\"selected-products\">

  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCartItemsGroups", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "
  ";
            // line 11
            if ($this->getAttribute($context["group"], "data", array())) {
                // line 12
                echo "    <tbody class=\"group\">
      <tr>
         ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.group", "group" => $this->getAttribute($context["group"], "data", array())))), "html", null, true);
                echo "
      </tr>
    </tbody>
  ";
            }
            // line 18
            echo "
  <tbody class=\"items\">
    ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 21
                echo "      <tr class=\"selected-product\">
        ";
                // line 22
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.item", "item" => $context["item"]))), "html", null, true);
                echo "
      </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  </tbody>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
  <tbody class=\"additional-items\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "cart.items"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 31
            echo "      <tr class=\"selected-product additional-item\">
        ";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
            echo "
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>

</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  82 => 32,  79 => 31,  75 => 30,  71 => 28,  63 => 25,  54 => 22,  51 => 21,  47 => 20,  43 => 18,  36 => 14,  32 => 12,  30 => 11,  27 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Shopping cart items block*/
/*  #*/
/*  # @ListChild (list="cart.children", weight="10")*/
/*  # @ListChild (list="checkout.cart", weight="10")*/
/*  #}*/
/* <table class="selected-products">*/
/* */
/*   {% for group in this.getCartItemsGroups() %}*/
/* */
/*   {% if group.data %}*/
/*     <tbody class="group">*/
/*       <tr>*/
/*          {{ widget_list('cart.group', group=group.data) }}*/
/*       </tr>*/
/*     </tbody>*/
/*   {% endif %}*/
/* */
/*   <tbody class="items">*/
/*     {% for item in group.items %}*/
/*       <tr class="selected-product">*/
/*         {{ widget_list('cart.item', item=item) }}*/
/*       </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* */
/*   {% endfor %}*/
/* */
/*   <tbody class="additional-items">*/
/*     {% for w in this.getViewList('cart.items') %}*/
/*       <tr class="selected-product additional-item">*/
/*         {{ w.display() }}*/
/*       </tr>*/
/*     {% endfor %}*/
/*   </tbody>*/
/* */
/* </table>*/
/* */
