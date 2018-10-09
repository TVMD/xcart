<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/inventory.twig */
class __TwigTemplate_29ae74c9630a5dd7af3011ca241059a70d88c7d60f39d006eb51bcda6abf2487 extends \XLite\Core\Templating\Twig\Template
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
<td>
  <input type=\"text\" class=\"inventory\" size=\"10\" value=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAmount", array(), "method"), "html", null, true);
        echo "\" name=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "amount", 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method")), "method"), "html", null, true);
        echo "\" ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getInventoryEnabled", array(), "method")) {
            echo " disabled=\"disabled\" ";
        }
        echo " />
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/columns/inventory.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Item price*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.columns", weight="70")*/
/*  #}*/
/* */
/* <td>*/
/*   <input type="text" class="inventory" size="10" value="{{ this.product.getAmount() }}" name="{{ this.getNamePostedData('amount', this.product.getProductId()) }}" {% if not this.product.getInventoryEnabled() %} disabled="disabled" {% endif %} />*/
/* </td>*/
/* */
