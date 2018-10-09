<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-common-attributes.twig */
class __TwigTemplate_c2929fc6d4cc226b36a35877bca6d01589214ab6ed29446d580c9dee9b9ff90c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\CommonAttributes", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-common-attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details attributes block*/
/*  #*/
/*  # @ListChild (list="product.details.page.tab.description", weight="50")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Product\\Details\\Customer\\CommonAttributes', product=this.product) }}*/
/* */
