<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.options.twig */
class __TwigTemplate_f5fb93589a5f736cb23729ed0524f8a579d0fd719adb2f24c4c99705238d9df5 extends \XLite\Core\Templating\Twig\Template
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
  <td class=\"option-name title-search-by-options\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Search in")), "html", null, true);
        echo ":</td>
  <td>
    <ul class=\"search-by-options\">
      ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "products.search.conditions.advanced.options"))), "html", null, true);
        echo "
    </ul>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Search in*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="option-name title-search-by-options">{{ t('Search in') }}:</td>*/
/*   <td>*/
/*     <ul class="search-by-options">*/
/*       {{ widget_list('products.search.conditions.advanced.options') }}*/
/*     </ul>*/
/*   </td>*/
/* </tr>*/
/* */
