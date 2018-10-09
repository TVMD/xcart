<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Sale/sale_discount_types/parts/hidden_percent.twig */
class __TwigTemplate_fb45c2ddc30504aa4fc098264cd04741549e4cd51607caf86be41f080fd49ff7 extends \XLite\Core\Templating\Twig\Template
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
 ";
        // line 7
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "discountType"), "method") == twig_constant("XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT"))) {
            // line 8
            echo "   <input type=\"hidden\"
     id=\"sale-price-value\"
     name=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "salePriceValue"), "method"), "html", null, true);
            echo "\"
     value=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPercentOffValue", array(), "method"), "html", null, true);
            echo "\" />
 ";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Sale/sale_discount_types/parts/hidden_percent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product element*/
/*  #*/
/*  # @ListChild (list="sale_discount_types", weight="40")*/
/*  #}*/
/* */
/*  {% if this.getParam('discountType') == constant('XLite\\Model\\Product::SALE_DISCOUNT_TYPE_PERCENT') %}*/
/*    <input type="hidden"*/
/*      id="sale-price-value"*/
/*      name="{{ this.getNamePostedData('salePriceValue') }}"*/
/*      value="{{ this.getPercentOffValue() }}" />*/
/*  {% endif %}*/
/* */
