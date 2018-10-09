<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.twig */
class __TwigTemplate_ab59c470e38e1c3b568b30d8940bb33663c07f7b9f46e5f5d5364fee14c6a5fa extends \XLite\Core\Templating\Twig\Template
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
        echo "<table cellspacing=\"0\" class=\"items\">
  <tr>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.items.head"))), "html", null, true);
        echo "</tr>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderItems", array(), "method"));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 9
            echo "  <tr>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.item", "item" => $context["item"]))), "html", null, true);
            echo "</tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "invoice.items"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["w"]) {
            // line 12
            echo "    <tr>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["w"], "display", array(), "method"), "html", null, true);
            echo "</tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['w'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 14,  44 => 12,  39 => 11,  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice items*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="50")*/
/*  #}*/
/* <table cellspacing="0" class="items">*/
/*   <tr>{{ widget_list('invoice.items.head') }}</tr>*/
/*   {% for index, item in this.getOrderItems() %}*/
/*   <tr>{{ widget_list('invoice.item', item=item) }}</tr>*/
/*   {% endfor %}*/
/*   {% for w in this.getViewList('invoice.items') %}*/
/*     <tr>{{ w.display() }}</tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
