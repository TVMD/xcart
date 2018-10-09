<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-link.twig */
class __TwigTemplate_a71a70221946023b1cf3e9c3a57d086f4816ddbd6e8f54d7d25bab453482357e extends \XLite\Core\Templating\Twig\Template
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
<a 
  href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
        echo "\"
  class=\"product-link\">
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array()), "html", null, true);
        echo "
</a>
";
        // line 12
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isShowStockWarning", array(), "method")) {
            // line 13
            echo "  <span class=\"product-items-available low-stock\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Only X left in stock", array("X" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAvailableAmount", array(), "method")))), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 13,  33 => 12,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Product link*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="20")*/
/*  #}*/
/* */
/* <a */
/*   href="{{ this.getProductURL(this.categoryId) }}"*/
/*   class="product-link">*/
/*   {{ this.product.name }}*/
/* </a>*/
/* {% if this.product.isShowStockWarning() %}*/
/*   <span class="product-items-available low-stock">{{ t('Only X left in stock', {'X': this.product.getAvailableAmount()}) }}</span>*/
/* {% endif %}*/
/* */
