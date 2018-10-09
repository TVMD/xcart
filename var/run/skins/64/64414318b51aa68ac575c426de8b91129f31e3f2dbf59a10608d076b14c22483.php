<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items/item.price.twig */
class __TwigTemplate_99367d6a66fa77077727d5aa7804d364276d48b36c3ae9f85b601472e1c65a24 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getItemNetPrice", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method")), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items/item.price.twig";
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
/*  # @ListChild (list="order.item", weight="20")*/
/*  #}*/
/* <td class="price">{{ this.formatPrice(this.item.getItemNetPrice(), this.order.getCurrency()) }}</td>*/
/* */
