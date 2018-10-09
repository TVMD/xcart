<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/columns/sku.twig */
class __TwigTemplate_a22954f1a27e3798488284d216b52f73b8cf4f9a292aeb12a507741865bb6de5 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/columns/sku.twig";
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
/*  # @ListChild (list="itemsList.product.admin.featured.columns", weight="20")*/
/*  #}*/
/* */
/* <td>{{ this.product.getSku()|raw }}</td>*/
/* */
