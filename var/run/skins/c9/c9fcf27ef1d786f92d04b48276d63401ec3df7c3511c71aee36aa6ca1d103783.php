<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/sku.twig */
class __TwigTemplate_117e7d849f031308b2cd16198259133da9bf2bab0f7aeae40a296ee3d1786e65 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/sku.twig";
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
/*  # @ListChild (list="itemsList.product.table.admin.search.columns", weight="20")*/
/*  #}*/
/* */
/* <td>{{ this.product.getSku()|raw }}</td>*/
/* */
