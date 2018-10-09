<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/columns/checkbox.twig */
class __TwigTemplate_2f2539271bcd3210d933d55893a4290405475ee9c553da6319a4532473510999 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"checkbox-column\"><input type=\"checkbox\" class=\"checkbox ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "html", null, true);
        echo "\" value=\"1\" name=\"product_ids[";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "html", null, true);
        echo "]\" /></td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/product/featured/parts/columns/checkbox.twig";
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
/*  # Column with checkboxes*/
/*  #*/
/*  # @ListChild (list="itemsList.product.admin.featured.columns", weight="10")*/
/*  #}*/
/* */
/* <td class="checkbox-column"><input type="checkbox" class="checkbox {{ this.product.getProductId() }}" value="1" name="product_ids[{{ this.product.getProductId() }}]" /></td>*/
/* */
