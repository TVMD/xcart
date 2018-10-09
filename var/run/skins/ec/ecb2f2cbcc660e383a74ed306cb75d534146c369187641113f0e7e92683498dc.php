<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.add-button.twig */
class __TwigTemplate_c64000452cda38496cd835a6c8f07ff6377fbccc5a237eeac9324a7eb7cb507a extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\AddButton", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.add-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Add to bag buttons*/
/*  #*/
/*  # @ListChild (list="product.details.page.info.buttons-added.cart-buttons", weight="30")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons-added.cart-buttons", weight="30")*/
/*  # @ListChild (list="product.details.page.info.buttons.cart-buttons", weight="20")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons.cart-buttons", weight="20")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Product\\Details\\Customer\\AddButton', product=this.product) }}*/
