<?php

/* /var/www/next/output/xcart/src/skins/customer/mini_cart/horizontal/parts/link.twig */
class __TwigTemplate_d3219a8c9a7a8a75508352c9c46d6651ad37f60b93bc4d2d68e3bc2f9283422f extends \XLite\Core\Templating\Twig\Template
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
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("_X_ items", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "countQuantity", array(), "method"))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/mini_cart/horizontal/parts/link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Horizontal minicart link block*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.children", weight="5")*/
/*  #}*/
/* {{ t('_X_ items', {'count': this.cart.countQuantity()})|raw }}*/
/* */
