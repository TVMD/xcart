<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/category/parts/info.featured_products.twig */
class __TwigTemplate_e8237b620737064ffcb4017de22011f051fbff0a56b90629b129f871967dbaaa extends \XLite\Core\Templating\Twig\Template
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
<i class=\"fa fa-star\"></i>
<a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "featured_products", "", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getCategoryId", array(), "method")))), "html", null, true);
        echo "\" class=\"count-link\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getFeaturedProductsCount", array(), "method"), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/FeaturedProducts/items_list/category/parts/info.featured_products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Featured products count link*/
/*  #*/
/*  # @ListChild (list="itemsList.category.cell.featured_products", weight="100")*/
/*  #}*/
/* */
/* <i class="fa fa-star"></i>*/
/* <a href="{{ url('featured_products', '', {'id': this.entity.getCategoryId()}) }}" class="count-link">{{ this.entity.getFeaturedProductsCount() }}</a>*/
/* */
