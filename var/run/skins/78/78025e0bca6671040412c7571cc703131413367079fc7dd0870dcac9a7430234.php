<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.category.twig */
class __TwigTemplate_20a4a3238f935d1584e15019f0bf66b8a91253daa2a67f2fbaa0935c63c868d2 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"option-name title-category\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Category")), "html", null, true);
        echo ":</td>
  <td>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\CategorySelect", "fieldName" => "categoryId", "selectedCategoryIds" => array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "categoryId"), "method")), "allOption" => "1", "noneOption" => "0"))), "html", null, true);
        echo "</td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Search by category*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced", weight="200")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="option-name title-category">{{ t('Category') }}:</td>*/
/*   <td>{{ widget('\\XLite\\View\\CategorySelect', fieldName='categoryId', selectedCategoryIds=[this.getCondition('categoryId')], allOption='1', noneOption="0") }}</td>*/
/* </tr>*/
/* */
