<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/items-list/cookie-data.twig */
class __TwigTemplate_2346651ba6386bd4675c41fabca2904ab652794d96404e9f2dbca620c5c9487a extends \XLite\Core\Templating\Twig\Template
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
        // line 13
        echo "
<div
  style=\"display: none;\"
  class=\"next-previous-cookie-data\"
  data-xc-product-id=\"";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "html", null, true);
        echo "\"
  data-xc-next-previous=\"";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDataString", array(), "method"), "html", null, true);
        echo "\">
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/items-list/cookie-data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 18,  25 => 17,  19 => 13,);
    }
}
/* {##*/
/*  # Item name*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="20")*/
/*  # @ListChild (list="itemsList.product.grid.customer.recently.info", weight="20")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="20")*/
/*  # @ListChild (list="itemsList.product.table.customer.column.after", weight="20")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.details", weight="20")*/
/*  # @ListChild (list="itemsList.product.big_thumbnails.customer.info", weight="200")*/
/*  # @ListChild (list="itemsList.product.text_links.customer.info", weight="100")*/
/*  # @ListChild (list="productBlock.info", weight="200")*/
/*  #}*/
/* */
/* <div*/
/*   style="display: none;"*/
/*   class="next-previous-cookie-data"*/
/*   data-xc-product-id="{{ this.product.getProductId() }}"*/
/*   data-xc-next-previous="{{ this.getDataString() }}">*/
/* </div>*/
/* */
