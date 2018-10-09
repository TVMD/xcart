<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/totals.twig */
class __TwigTemplate_e894a18a1194e83c12a9d3c1c31f6f2b1fef872f140a08cc0b2aee2758f38ea5 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.items.totals.before"))), "html", null, true);
        echo "
<td class=\"total-title empty\"></td>
<td class=\"total-title\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Total"));
        echo ":</td>
<td class=\"total-item\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTotalQty", array(), "method"), "html", null, true);
        echo "</td>
<td class=\"total-item\"></td>
";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.items.totals.after"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/totals.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 12,  31 => 10,  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals*/
/*  #*/
/*  # @ListChild (list="packing_slip.items", weight="10")*/
/*  #}*/
/* */
/* {{ widget_list('packing_slip.items.totals.before') }}*/
/* <td class="total-title empty"></td>*/
/* <td class="total-title">{{ t('Total')|raw }}:</td>*/
/* <td class="total-item">{{ this.getTotalQty() }}</td>*/
/* <td class="total-item"></td>*/
/* {{ widget_list('packing_slip.items.totals.after') }}*/
/* */
