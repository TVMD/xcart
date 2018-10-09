<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/inventory.twig */
class __TwigTemplate_70956cde906f7f8c82e5b934320d1c2d7e3bbf474184b6c1634aaecc6ef49d17 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"inventory\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Amount")), "sortByColumn" => twig_constant("SORT_BY_MODE_AMOUNT", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/table/parts/header/inventory.twig";
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
/*  # Item price*/
/*  #*/
/*  # @ListChild (list="itemsList.product.table.admin.search.header", weight="70")*/
/*  #}*/
/* */
/* <th class="inventory">{{ widget(template='items_list/sort.twig', title=t('Amount'), sortByColumn=constant('SORT_BY_MODE_AMOUNT', this)) }}</th>*/
/* */
