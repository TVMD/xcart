<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/product/details/parts/express_checkout.twig */
class __TwigTemplate_37dfe310636ad40cf1b750140931aca81116c8d0fb6039170daa8dd7810a1a86 extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Product\\ExpressCheckoutButton", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/product/details/parts/express_checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 9,);
    }
}
/* {##*/
/*  # Express checkout*/
/*  #*/
/*  # @ListChild (list="product.details.page.info.buttons-added.cart-buttons", weight="40")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons-added.cart-buttons", weight="40")*/
/*  # @ListChild (list="product.details.page.info.buttons.cart-buttons", weight="30")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons.cart-buttons", weight="30")*/
/*  #}*/
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Product\\ExpressCheckoutButton', product=this.product) }}*/
/* */
/* */
