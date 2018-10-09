<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/name.twig */
class __TwigTemplate_a704dc9f61976f0ec124854e29b7dacd7d8e0cf8e2de5172fc2bbd764a24f348 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"name\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => "Name", "sortByColumn" => twig_constant("SORT_BY_MODE_NAME", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/name.twig";
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
/*  # Item name*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="30")*/
/*  #}*/
/* */
/* <th class="name">{{ widget(template='items_list/sort.twig', title='Name', sortByColumn=constant('SORT_BY_MODE_NAME', this)) }}</th>*/
/* */
