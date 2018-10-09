<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/parts/info_textlinks.twig */
class __TwigTemplate_0eb7416ab679465e44c1232a3456207da97b9d378eb538b60f364ad927aea893 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "
";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/product/parts/common.product-name.twig"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/parts/info_textlinks.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 6,  19 => 5,);
    }
}
/* {##*/
/*  # Products list item*/
/*  # @ListChild (list="itemsList.product.text_links.customer.recently.info", weight="100")*/
/*  #}*/
/* */
/* {{ widget(template='items_list/product/parts/common.product-name.twig') }}*/
/* */
