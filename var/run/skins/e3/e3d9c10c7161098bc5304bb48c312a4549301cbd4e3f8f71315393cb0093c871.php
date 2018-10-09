<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/list.button-add2cart.twig */
class __TwigTemplate_176976035f7a0ef6b91aaf78bbb875160b9d86644fb011eadf1f9a0a786c4da5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAdd2CartButton", array(), "method")) {
            // line 8
            echo "  <div class=\"add-to-cart-button\">
    ";
            // line 9
            if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isOutOfStock", array(), "method")) {
                // line 10
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => "Add to cart", "style" => ("regular-main-button add2cart add-to-cart productid-" . $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array()))))), "html", null, true);
                echo "
    ";
            }
            // line 12
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/list.button-add2cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Add to Cart button template*/
/*  #*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="1000")*/
/*  #}*/
/* */
/* {% if this.isDisplayAdd2CartButton() %}*/
/*   <div class="add-to-cart-button">*/
/*     {% if not this.product.isOutOfStock() %}*/
/*         {{ widget('\\XLite\\View\\Button\\Submit', label='Add to cart', style='regular-main-button add2cart add-to-cart productid-' ~ this.product.product_id) }}*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
