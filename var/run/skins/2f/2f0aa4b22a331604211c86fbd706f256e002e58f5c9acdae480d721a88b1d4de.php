<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-description.twig */
class __TwigTemplate_a8809a98abbbf1e95e28cedc6a59fcb7930d2d89385967e318d50eb9f0c9e654 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getBriefDescription", array(), "method")) {
            // line 7
            echo "  <div class=\"description product-description\">";
            echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProcessedBriefDescription", array(), "method");
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Item description*/
/*  #*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="30")*/
/*  #}*/
/* {% if this.product.getBriefDescription() %}*/
/*   <div class="description product-description">{{ this.product.getProcessedBriefDescription()|raw }}</div>*/
/* {% endif %}*/
/* */
