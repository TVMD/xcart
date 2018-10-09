<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-sku.twig */
class __TwigTemplate_e2416366984d0aaaa6d372815ec6ca2c3892a7f95cea1b8a692eb3d853b2effe extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"product-sku\">";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "sku", array())) {
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "sku", array()), "html", null, true);
        } else {
            echo "&nbsp;";
        }
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-sku.twig";
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
/*  # Item SKU*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="10")*/
/*  #}*/
/* <span class="product-sku">{% if this.product.sku %}{{ this.product.sku }}{% else %}&nbsp;{% endif %}</span>*/
/* */
