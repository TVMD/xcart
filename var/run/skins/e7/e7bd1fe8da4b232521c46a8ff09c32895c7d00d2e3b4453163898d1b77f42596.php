<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/top_menu.twig */
class __TwigTemplate_3a895c72643993317dea40f8f8c376ff1e542eae88cc19157e728253f7fda99b extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Layout\\Customer\\DesktopNavbar"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/top_menu.twig";
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
/*  # Top menu container*/
/*  #*/
/*  # @ListChild (list="layout.main", weight="250")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Layout\\Customer\\DesktopNavbar') }}*/
