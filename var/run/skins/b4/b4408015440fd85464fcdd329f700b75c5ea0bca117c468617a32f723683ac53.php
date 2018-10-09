<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.info.buttons.cart-buttons.twig */
class __TwigTemplate_1d3e1d2dd533a9820b5dbcd2e59c1d4be5d15f3fd1a93bb52909e2644687241d extends \XLite\Core\Templating\Twig\Template
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
<div class=\"buttons-row\">
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart-buttons", "type" => "nested"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.info.buttons.cart-buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 11,  19 => 9,);
    }
}
/* {##*/
/*  # Product details buttons block*/
/*  #*/
/*  # @ListChild (list="product.details.page.info.buttons", weight="10")*/
/*  # @ListChild (list="product.details.page.info.buttons-added", weight="10")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons", weight="20")*/
/*  # @ListChild (list="product.details.quicklook.info.buttons-added", weight="20")*/
/*  #}*/
/* */
/* <div class="buttons-row">*/
/*   {{ widget_list('cart-buttons', type='nested') }}*/
/* </div>*/
/* */
