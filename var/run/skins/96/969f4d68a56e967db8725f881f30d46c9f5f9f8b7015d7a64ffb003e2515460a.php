<?php

/* modules/XC/Reviews/product/items_list/rating.twig */
class __TwigTemplate_ba60af287ef9c510a9b6b6c4655c7f62858455822328c3e1f365f2252df22600 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        $this->startForm("\\XLite\\Module\\XC\\Reviews\\View\\Form\\AverageRating", array("product_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProductId", array(), "method"), "target_widget" => "\\\\XLite\\\\Module\\\\XC\\\\Reviews\\\\View\\\\Customer\\\\ProductInfo\\\\ItemsList\\\\AverageRating"));        // line 6
        echo "
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.product.rating.average", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProduct", array(), "method"), "widgetMode" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMode", array(), "method")))), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/product/items_list/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 7,  23 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Rating value in product info*/
/*  #}*/
/* */
/* {% form '\\XLite\\Module\\XC\\Reviews\\View\\Form\\AverageRating' with {product_id: this.getRatedProductId(), target_widget: '\\\\XLite\\\\Module\\\\XC\\\\Reviews\\\\View\\\\Customer\\\\ProductInfo\\\\ItemsList\\\\AverageRating'} %}*/
/* */
/*   {{ widget_list('reviews.product.rating.average', product=this.getRatedProduct(), widgetMode=this.getWidgetMode()) }}*/
/* */
/* {% endform %}*/
/* */
