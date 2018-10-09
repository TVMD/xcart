<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/columns/sku.twig */
class __TwigTemplate_fe2826547dc2161ddf0a9d9a95de041ba8e1e46ca91066d467c2841001476cb2 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/columns/sku.twig";
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
/*  # @ListChild (list="itemsList.product.modify.brief.admin.columns", weight="20")*/
/*  #}*/
/* */
/* <td>{{ this.product.getSku()|raw }}</td>*/
/* */
