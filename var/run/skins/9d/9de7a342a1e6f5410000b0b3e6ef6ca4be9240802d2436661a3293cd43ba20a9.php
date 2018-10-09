<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/page.tabs.attributes.twig */
class __TwigTemplate_bca70cfcf583bf2c623344e6679474aecd8e173156176ff1fafe42d4ae1fb5aa extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"extra-fields\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.common.product-attributes.attributes"))), "html", null, true);
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/page.tabs.attributes.twig";
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
/*  # Product details attributes tab */
/*  #*/
/*  # @ListChild (list="product.details.page.tab.attributes", weight="10")*/
/*  #}*/
/* <ul class="extra-fields">*/
/*   {{ widget_list('product.details.common.product-attributes.attributes') }}*/
/* </ul>*/
/* */
