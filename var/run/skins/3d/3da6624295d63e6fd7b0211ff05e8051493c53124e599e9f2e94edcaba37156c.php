<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.stock.twig */
class __TwigTemplate_6c399d9ccb6a43d63efaa44d2f70a9c4a1978b831c7f95a32b7d08aa57195d37 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\Stock", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.stock.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Product stock*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="18")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="18")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Product\\Details\\Customer\\Stock', product=this.product) }}*/
/* */
