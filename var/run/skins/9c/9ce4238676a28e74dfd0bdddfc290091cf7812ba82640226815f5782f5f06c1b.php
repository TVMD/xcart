<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-description.twig */
class __TwigTemplate_493991e71f9d59db9588bf5fbb5cae5926ad8a70839c295b434a24da56743af3 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"description product-description\" ";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getFieldMetadata", array(0 => "description"), "method")), "method");
        echo " >";
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProcessedDescription", array(), "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-description.twig";
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
/*  # Product details attributes block*/
/*  #*/
/*  # @ListChild (list="product.details.page.tab.description", weight="100")*/
/*  #}*/
/* */
/* <div class="description product-description" {{ this.printTagAttributes(this.product.getFieldMetadata('description'))|raw }} >{{ this.product.getProcessedDescription()|raw }}</div>*/
/* */
