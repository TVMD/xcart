<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/page.tabs.twig */
class __TwigTemplate_f7015e9d61ffefb97a026df8689feb72d6b49354c8faa6d02ff6df44652b7526 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Product\\Details\\Customer\\Page\\Tabs"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/page.tabs.twig";
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
/*  # Product details information block*/
/*  #*/
/*  # @ListChild (list="product.details.page", weight="40")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Product\\Details\\Customer\\Page\\Tabs') }}*/
/* */
