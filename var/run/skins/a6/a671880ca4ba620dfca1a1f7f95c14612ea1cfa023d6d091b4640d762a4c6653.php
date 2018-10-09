<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/item_list/product/parts/express_checkout.twig */
class __TwigTemplate_d7ea5d448a980739e0afbd997dcb0054a637e32fc7376fde444c41a1688e7de6 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAdd2CartButton", array(), "method")) {
            // line 7
            echo "  <div class=\"add-to-cart-button pp-button\">
    ";
            // line 8
            if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isOutOfStock", array(), "method")) {
                // line 9
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Button\\ProductList\\ExpressCheckout", "productId" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array())))), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/item_list/product/parts/express_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  26 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Express checkout*/
/*  #*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="1100")*/
/*  #}*/
/* {% if this.isDisplayAdd2CartButton() %}*/
/*   <div class="add-to-cart-button pp-button">*/
/*     {% if not this.product.isOutOfStock() %}*/
/*       {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Button\\ProductList\\ExpressCheckout', productId=this.product.product_id) }}*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
