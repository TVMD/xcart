<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/modify/common/parts/columns/sku.twig */
class __TwigTemplate_ab5ec27daecffd12de7c4ebe7813fb471b1c662b804865fc75e1d229653c8a54 extends \XLite\Core\Templating\Twig\Template
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
<td>";
        // line 7
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getSku", array(), "method");
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/modify/common/parts/columns/sku.twig";
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
/*  # Item SKU*/
/*  #*/
/*  # @ListChild (list="itemsList.product.modify.common.admin.columns", weight="20")*/
/*  #}*/
/* */
/* <td>{{ this.product.getSku()|raw }}</td>*/
/* */
