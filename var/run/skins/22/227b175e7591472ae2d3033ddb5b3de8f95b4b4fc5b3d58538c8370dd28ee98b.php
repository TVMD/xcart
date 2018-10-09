<?php

/* /var/www/next/output/xcart/src/skins/customer/order/invoice/parts/items/item.price.twig */
class __TwigTemplate_53659d3bc3dcac362d88e65ee8a403f2a0b4188f2ea9574f4eb20ebf5ea6c630 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/customer/order/invoice/parts/items/item.price.twig";
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
