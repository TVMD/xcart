<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/form.twig */
class __TwigTemplate_dd51a3741fbc1a0e17d3c992ec95c12186f6b223dd1e85a4675570565da6e1c3 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.product.rating.form.content"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 8,);
    }
}
/* {##*/
/*  # Rating*/
/*  #*/
/*  # @ListChild (list="reviews.product.rating", weight="100")*/
/*  # @ListChild (list="reviews.page.rating", weight="100")*/
/*  # @ListChild (list="reviews.tab.rating", weight="200")*/
/*  #}*/
/* {{ widget_list('reviews.product.rating.form.content') }}*/
/* */
