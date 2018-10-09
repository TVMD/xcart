<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.quicklook-button.twig */
class __TwigTemplate_86c159eb7d0f5da89fc40eb3288fa06ef44011d921d29e78f8134282f91803a7 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isQuickLookEnabled", array(), "method")) {
            // line 9
            echo "  <div class=\"quicklook\">
    <a
      href=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
            echo "\"
      class=\"quicklook-link quicklook-link-";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array()), "html", null, true);
            echo " quicklook-link-category-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array()), "html", null, true);
            echo "\">
      <div class=\"quicklook-view\">&nbsp;</div>
    </a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.quicklook-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 12,  25 => 11,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Overlapping box*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info.photo", weight="999")*/
/*  # @ListChild (list="itemsList.product.list.customer.quicklook", weight="999")*/
/*  # @ListChild (list="productBlock.info", weight="999")*/
/*  #}*/
/* {% if this.isQuickLookEnabled() %}*/
/*   <div class="quicklook">*/
/*     <a*/
/*       href="{{ this.getProductURL(this.categoryId) }}"*/
/*       class="quicklook-link quicklook-link-{{ this.product.product_id }} quicklook-link-category-{{ this.categoryId }}">*/
/*       <div class="quicklook-view">&nbsp;</div>*/
/*     </a>*/
/*   </div>*/
/* {% endif %}*/
/* */
