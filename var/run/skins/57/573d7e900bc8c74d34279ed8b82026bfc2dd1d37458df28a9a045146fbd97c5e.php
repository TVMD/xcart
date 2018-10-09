<?php

/* /var/www/next/output/xcart/src/skins/pdf/common/order/invoice/parts/items/item.price.twig */
class __TwigTemplate_1c72f1026cd3baa762ee14e77bde7f209ba6b5d5aa275caa3a6a0bd42ccb0227 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatInvoicePrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderItemPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method"), 2 => 1), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/pdf/common/order/invoice/parts/items/item.price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Price item cell*/
/*  #*/
/*  # @ListChild (list="invoice.item", weight="20")*/
/*  #}*/
/* <td class="price">{{ this.formatInvoicePrice(this.getOrderItemPrice(this.item), this.order.getCurrency(), 1) }}</td>*/
/* */
