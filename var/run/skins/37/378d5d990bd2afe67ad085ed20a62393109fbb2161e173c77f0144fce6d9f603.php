<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.sku.twig */
class __TwigTemplate_12f558e2b98f70c1949fdde5fc6c0eb543a63270b386fe219ae2c841980eb9d2 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"product-sku\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getSku", array(), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/table.common.sku.twig";
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
/*  # Create return :: form :: products :: column :: SKU*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form.columns", weight="10")*/
/*  #}*/
/* */
/* <span class="product-sku">{{ this.item.getSku() }}</span>*/
/* */
