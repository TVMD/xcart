<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/page.info.twig */
class __TwigTemplate_678556a548e635305fd7f061aad681b801862e8e00f5e12b81e8884df0264213 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-details-info\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.page.info"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/page.info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Product details main block*/
/*  #*/
/*  # @ListChild (list="product.details.page", weight="30")*/
/*  #}*/
/* */
/* <div class="product-details-info">*/
/*   {{ widget_list('product.details.page.info') }}*/
/* </div>*/
/* */
