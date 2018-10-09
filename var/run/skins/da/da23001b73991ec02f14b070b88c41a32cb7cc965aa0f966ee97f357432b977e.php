<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.list.twig */
class __TwigTemplate_f3cea2796976cc765edc14951865290e6e8d4d2b331579b711e297893a22ddc0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"list\" style=\"display: none;\" :style=\"itemsList\">

  <ul>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "      <li>
        <a href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "getURL", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "getName", array(), "method"), "html", null, true);
            echo "<img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" alt=\"\" class=\"fade\" /></a>
        <div>
          &times;
          <span class=\"qty\">";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "getAmount", array(), "method"), "html", null, true);
            echo "</span>
        </div>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "  </ul>

  <hr />
  <a href=\"";
        // line 22
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart")), "html", null, true);
        echo "\" class=\"cart\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View cart")), "html", null, true);
        echo "</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  51 => 19,  41 => 15,  31 => 12,  28 => 11,  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # Checkout : order review step : items : list*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.items", weight="20")*/
/*  # @ListChild (list="checkout.review.inactive.items", weight="20")*/
/*  #}*/
/* <div class="list" style="display: none;" :style="itemsList">*/
/* */
/*   <ul>*/
/*     {% for item in this.getItems() %}*/
/*       <li>*/
/*         <a href="{{ item.getURL() }}">{{ item.getName() }}<img src="{{ asset('images/spacer.gif') }}" alt="" class="fade" /></a>*/
/*         <div>*/
/*           &times;*/
/*           <span class="qty">{{ item.getAmount() }}</span>*/
/*         </div>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <hr />*/
/*   <a href="{{ url('cart') }}" class="cart">{{ t('View cart') }}</a>*/
/* </div>*/
/* */
