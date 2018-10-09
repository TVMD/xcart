<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/substring.button.twig */
class __TwigTemplate_727321e09f1e3710644d8c7e0660ea1292191b02a9001f35d2cc10cf8a4accf2 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"submit-button\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => "Search", "style" => "search-form-submit"))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/substring.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Button*/
/*  #*/
/*  # @listChild (list="products.search.conditions.substring", weight="200")*/
/*  # @listChild (list="products.search.conditions-responsive.substring", weight="200")*/
/*  #}*/
/* */
/* <td class="submit-button">*/
/*   {{ widget('\\XLite\\View\\Button\\Submit', label='Search', style='search-form-submit') }}*/
/* </td>*/
/* */
