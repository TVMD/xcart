<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/model/table/category/parts/info.subcategories.twig */
class __TwigTemplate_82b56b08aeeae37524d086a522d25fb67174107d1e0902e25b9615cbb7c9b1bb extends \XLite\Core\Templating\Twig\Template
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
<a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "categories", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getCategoryId", array(), "method")))), "html", null, true);
        echo "\" class=\"count-link\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getSubcategoriesCount", array(), "method"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/model/table/category/parts/info.subcategories.twig";
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
/*  # Subcategories count link*/
/*  #*/
/*  # @ListChild (list="itemsList.category.cell.subcategories", weight="100")*/
/*  #}*/
/* */
/* <a href="{{ url('categories', '', {'id': this.entity.getCategoryId()}) }}" class="count-link">{{ this.entity.getSubcategoriesCount() }}</a>*/
/* */
