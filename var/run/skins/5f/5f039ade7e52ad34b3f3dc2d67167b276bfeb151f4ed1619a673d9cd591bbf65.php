<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-editable-attributes.twig */
class __TwigTemplate_06e0a3292a27da78a48fee6cd415cdf42b60611be4fcecf65adcdd8bd2b00986 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\EditableAttributes", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-editable-attributes.twig";
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
/*  # Product details 'Editable attributes' block*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="55")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="55")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Product\\Details\\Customer\\EditableAttributes', product=this.product) }}*/
/* */
