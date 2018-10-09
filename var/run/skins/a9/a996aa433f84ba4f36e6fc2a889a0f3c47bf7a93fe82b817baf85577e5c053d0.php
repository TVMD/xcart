<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/position.twig */
class __TwigTemplate_5443ef4fd66638e61287a5698732016dd57670861a8ad92c2309ebc0fa2c3578 extends \XLite\Core\Templating\Twig\Template
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
<td><input type=\"text\" class=\"pos\" size=\"5\" name=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "pos", 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method")), "method"), "html", null, true);
        echo "\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getOrderBy", array(), "method"), "html", null, true);
        echo "\" /></td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/position.twig";
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
/*  # Item position*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.columns", weight="50")*/
/*  #}*/
/* */
/* <td><input type="text" class="pos" size="5" name="{{ this.getNamePostedData('pos', this.product.getProductId()) }}" value="{{ this.product.getOrderBy() }}" /></td>*/
/* */
