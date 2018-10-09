<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/position.twig */
class __TwigTemplate_9f102c823d8225ac3e6ae2a941f83b215266e24d6a111bdf81b2700bbe2b65f2 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"pos\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Pos.")), "sortByColumn" => ""))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/position.twig";
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
/*  # Item position*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="50")*/
/*  #}*/
/* */
/* <th class="pos">{{ widget(template='items_list/sort.twig', title=t('Pos.'), sortByColumn='') }}</th>*/
/* */
