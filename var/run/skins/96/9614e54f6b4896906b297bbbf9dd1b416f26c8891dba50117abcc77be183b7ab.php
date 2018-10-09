<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.briefDescription.twig */
class __TwigTemplate_6a59c26844bccf647ee432b7f6a27985da884f6a92baa65c1fbaa8920b8eab9a extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "briefDescription", array()) || $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isPreview", array(), "method"))) {
            // line 8
            echo "  <div class=\"brief-descr product-description\" ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getFieldMetadata", array(0 => "briefDescription"), "method")), "method");
            echo " >";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProcessedBriefDescription", array(), "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.briefDescription.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Rating value in product info*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="18")*/
/*  #}*/
/* */
/* {% if this.product.briefDescription or this.isPreview() %}*/
/*   <div class="brief-descr product-description" {{ this.printTagAttributes(this.product.getFieldMetadata('briefDescription'))|raw }} >{{ this.product.getProcessedBriefDescription()|raw }}</div>*/
/* {% endif %}*/
/* */
