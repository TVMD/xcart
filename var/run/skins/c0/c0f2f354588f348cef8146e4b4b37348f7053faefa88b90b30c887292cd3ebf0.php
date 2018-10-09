<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/price.twig */
class __TwigTemplate_6a4509e0671de9c17b8ae734e2209a381d71661f95b0192d6ab754dc35190664 extends \XLite\Core\Templating\Twig\Template
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
<td><input type=\"text\" class=\"price\" size=\"10\" value=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getPrice", array(), "method"), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "price", 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method")), "method"), "html", null, true);
        echo "\" /></td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/price.twig";
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
/*  # Item price*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.columns", weight="60")*/
/*  #}*/
/* */
/* <td><input type="text" class="price" size="10" value="{{ this.product.getPrice() }}" name="{{ this.getNamePostedData('price', this.product.getProductId()) }}" /></td>*/
/* */
