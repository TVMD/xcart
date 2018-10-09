<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/header/name.twig */
class __TwigTemplate_8b5c37c18c77e6496ea32c24d8bc1c421a7f6b80f85104750ba31dd901a8d79e extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "items_list/sort.twig", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Name")), "sortByColumn" => twig_constant("SORT_BY_MODE_NAME", (isset($context["this"]) ? $context["this"] : null))))), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/product/modify/brief/parts/header/name.twig";
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
/*  # @ListChild (list="itemsList.product.modify.brief.admin.header", weight="30")*/
/*  #}*/
/* */
/* <th class="name">{{ widget(template='items_list/sort.twig', title=t('Name'), sortByColumn=constant('SORT_BY_MODE_NAME', this)) }}</th>*/
/* */
