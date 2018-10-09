<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items/item.qty.twig */
class __TwigTemplate_1113d4108b9183fe7d5b1dc8f8bc3bf2b3f9f56835a933630ff12754ed2e738c extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"qty\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items/item.qty.twig";
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
/*  # Quantity item cell*/
/*  #*/
/*  # @ListChild (list="order.item", weight="30")*/
/*  #}*/
/* <td class="qty">{{ this.item.getAmount() }}</td>*/
/* */
