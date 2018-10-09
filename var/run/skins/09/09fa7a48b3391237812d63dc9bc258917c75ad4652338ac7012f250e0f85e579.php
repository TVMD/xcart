<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/simple-search-parts/input.twig */
class __TwigTemplate_7ef95a07e47f626fc455ea7e579f385d278b67ea015ed9e504597c4ba6bab3d7 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text\\SearchBox", "fieldName" => "substring", "fieldOnly" => "true"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/simple-search-parts/input.twig";
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
/*  # Main element (input)*/
/*  #*/
/*  # @ListChild (list="product.simple-search-form.simple-box.elements", weight="10")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Input\\Text\\SearchBox', fieldName='substring', fieldOnly='true') }}*/
/* */
