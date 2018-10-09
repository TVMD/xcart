<?php

/* /var/www/next/output/xcart/src/skins/admin/product_classes/header_note.twig */
class __TwigTemplate_be4c147ff0eed429eb48369ea4a1dce82d0f65320d6d8b5ed39836e4aceaaa0b extends \XLite\Core\Templating\Twig\Template
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
<p class=\"page-note\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This page allows you to edit global attributes, which are available for all products in your store, and attributes specific for classes of your products.")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/product_classes/header_note.twig";
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
/*  # Product classes page template*/
/*  #*/
/*  # @ListChild (list="itemsList.productclass.header.before", weight="10")*/
/*  #}*/
/* */
/* <p class="page-note">{{ t('This page allows you to edit global attributes, which are available for all products in your store, and attributes specific for classes of your products.') }}</p>*/
/* */
