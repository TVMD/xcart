<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.more-info-link.twig */
class __TwigTemplate_4e3f3c8284352cab8d97668eab846bc05b78d401ac845d6b161d5ebd37609592 extends \XLite\Core\Templating\Twig\Template
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
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product", "", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array()), "category_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCategoryId", array(), "method")))), "html", null, true);
        echo "\" class=\"product-more-link\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("More details")), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.more-info-link.twig";
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
/*  # Product details title main block*/
/*  #*/
/*  # @ListChild (list="product.details.quicklook.info", weight="12")*/
/*  #}*/
/* */
/* <a href="{{ url('product', '', {'product_id': this.product.product_id, 'category_id': this.getCategoryId()}) }}" class="product-more-link">{{ t('More details') }}</a>*/
/* */
