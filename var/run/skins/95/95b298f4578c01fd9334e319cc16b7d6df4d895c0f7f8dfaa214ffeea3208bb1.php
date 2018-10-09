<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items.twig */
class __TwigTemplate_eb3ba4c485c2c3707289d12a408a6f84135be35fb95cd350e0ea77cff540a9ff extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.items.head"))), "html", null, true);
        echo "</tr>
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderItems", array()));
        foreach ($context['_seq'] as $context["index"] => $context["item"]) {
            // line 9
            echo "  <tr>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.item", "item" => $context["item"]))), "html", null, true);
            echo "</tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getViewList", array(0 => "packing_slip.items"), "method"));
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
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items.twig";
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
/*  # @ListChild (list="packing_slip.base", weight="30")*/
/*  #}*/
/* <table cellspacing="0" class="items">*/
/*   <tr>{{ widget_list('packing_slip.items.head') }}</tr>*/
/*   {% for index, item in this.orderItems %}*/
/*   <tr>{{ widget_list('packing_slip.item', item=item) }}</tr>*/
/*   {% endfor %}*/
/*   {% for w in this.getViewList('packing_slip.items') %}*/
/*     <tr>{{ w.display() }}</tr>*/
/*   {% endfor %}*/
/* </table>*/
