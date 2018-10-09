<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/order/parts/actions.reorder.twig */
class __TwigTemplate_714bb1415d63cadd2599b2378de0e764f574ef9736c04f40546f44568da3c6b1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showReorder", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())), "method")) {
            // line 8
            echo "  <li class=\"reorder\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "label" => "Re-order", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "cart", "add_order", array("order_number" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "orderNumber", array()))))))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/order/parts/actions.reorder.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Orders list item : actions : reorder*/
/*  #*/
/*  # @ListChild (list="orders.children.actions", weight="100")*/
/*  #}*/
/* */
/* {% if this.showReorder(this.order) %}*/
/*   <li class="reorder">*/
/*     {{ widget('\\XLite\\View\\Button\\Link', label='Re-order', location=url('cart', 'add_order', {'order_number': this.order.orderNumber})) }}*/
/*   </li>*/
/* {% endif %}*/
