<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/totals.subtotal.twig */
class __TwigTemplate_66e497a1d2eba5fac1fad3ef9e3353a38e0b47881507ec7d248701b7de798c2a extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr>
    <td class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubtotalTitle", array(), "method"), "html", null, true);
        echo ":</td>
    <td class=\"value\">";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderSubtotal", array(), "method");
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/totals.subtotal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals : subtotal*/
/*  #*/
/*  # @ListChild (list="invoice.base.totals", weight="100")*/
/*  #}*/
/* <tr>*/
/*     <td class="title">{{ this.getSubtotalTitle() }}:</td>*/
/*     <td class="value">{{ this.getOrderSubtotal()|raw }}</td>*/
/* </tr>*/
/* */
