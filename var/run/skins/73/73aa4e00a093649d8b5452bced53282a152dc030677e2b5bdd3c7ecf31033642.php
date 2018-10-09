<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.price.twig */
class __TwigTemplate_e70e5873bbbabd1073bf8b38ad714593b18e5b2b04d1439d611f37f58a4df7e2 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Price", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 7,);
    }
}
/* {##*/
/*  # Product price*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="40")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="40")*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Price', product=this.product) }}*/
/* */
