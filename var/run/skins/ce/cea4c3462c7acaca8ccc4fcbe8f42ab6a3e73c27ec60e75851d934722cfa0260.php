<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/header/inventory.twig */
class __TwigTemplate_84b746fd177d56bebfa7fe02618965926b751a59c842b03ca01fde2854feed49 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/header/inventory.twig";
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
/*  # @ListChild (list="itemsList.product.modify.brief.admin.header", weight="70")*/
/*  #}*/
/* */
/* <th class="inventory">{{ widget(template='items_list/sort.twig', title=t('Qty'), sortByColumn=constant('SORT_BY_MODE_AMOUNT', this)) }}</th>*/
/* */
