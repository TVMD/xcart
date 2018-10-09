<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/common_attributes/common.product-attributes.sku.twig */
class __TwigTemplate_f9ccb1f7ec5517e7543dd0da2f04f0eda675d2f8c50120b55a5590da47d0205f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSKU", array(), "method")) {
            // line 7
            echo "  <li class=\"identifier product-sku\">
    <div><strong class=\"type\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("SKU")), "html", null, true);
            echo "</strong></div>
    <span class=\"value\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSKU", array(), "method"), "html", null, true);
            echo "</span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/common_attributes/common.product-attributes.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details SKU main block*/
/*  #*/
/*  # @ListChild (list="product.details.common.product-attributes.elements", weight="200")*/
/*  #}*/
/* {% if this.getSKU() %}*/
/*   <li class="identifier product-sku">*/
/*     <div><strong class="type">{{ t('SKU') }}</strong></div>*/
/*     <span class="value">{{ this.getSKU() }}</span>*/
/*   </li>*/
/* {% endif %}*/
/* */
