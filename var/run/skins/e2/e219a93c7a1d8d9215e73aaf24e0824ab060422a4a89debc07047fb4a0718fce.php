<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/item.name.sku.twig */
class __TwigTemplate_ab4727829e4d17bba2935a29cb1e990fe2220da3ee0f856a085758222ff6667b extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"sku\">
  <span class=\"sku-value\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getSku", array(), "method"), "html", null, true);
        echo "</span>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/item.name.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # SKU item cell*/
/*  #*/
/*  # @ListChild (list="packing_slip.item", weight="10")*/
/*  #}*/
/* <td class="sku">*/
/*   <span class="sku-value">{{ this.item.getSku() }}</span>*/
/* </td>*/
/* */
