<?php

/* /var/www/next/output/xcart/src/skins/customer/product_box/parts/add2cart.twig */
class __TwigTemplate_1dd5e5714c5527bd30fa305f5f1c996679a2ef99644fe5940c018a05140ae54a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isAvailable", array(), "method")) {
            // line 7
            echo "  ";
            $this->startForm("\\XLite\\View\\Form\\Product\\AddToCart", array("product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "className" => "add-to-cart"));            // line 8
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "style" => "product-add2cart", "label" => "Add to cart"))), "html", null, true);
            echo "
  ";
            $this->endForm();        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product_box/parts/add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Item buttons*/
/*  #*/
/*  # @ListChild (list="productBlock.info", weight="400")*/
/*  #}*/
/* {% if this.product.isAvailable() %}*/
/*   {% form '\\XLite\\View\\Form\\Product\\AddToCart' with {product: this.product, className: 'add-to-cart'} %}*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', style='product-add2cart', label='Add to cart') }}*/
/*   {% endform %}*/
/* {% endif %}*/
/* */
