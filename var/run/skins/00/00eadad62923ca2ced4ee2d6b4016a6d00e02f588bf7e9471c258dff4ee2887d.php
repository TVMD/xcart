<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/modify/common/parts/header/inventory.twig */
class __TwigTemplate_0c884a55f2f63f85ee7bdb11ead3e53f474153bc423327d0d2cdcf64b2d9d652 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Qty")), "sortByColumn" => twig_constant("SORT_BY_MODE_AMOUNT", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/modify/common/parts/header/inventory.twig";
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
/*  # @ListChild (list="itemsList.product.modify.common.admin.header", weight="70")*/
/*  #}*/
/* */
/* <th class="inventory">{{ widget(template='items_list/sort.twig', title=t('Qty'), sortByColumn=constant('SORT_BY_MODE_AMOUNT', this)) }}</th>*/
/* */
