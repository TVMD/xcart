<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_tab/parts/tab.reviews_list_header.twig */
class __TwigTemplate_b76067d4a9bdc7b3e47ba6f5fb8feadc0eb7f7d3f38218ed739bdae8a54ae3be extends \XLite\Core\Templating\Twig\Template
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
<div class=\"header\">
  <div class=\"left\">
    <div class=\"head-h2\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Customer reviews")), "html", null, true);
        echo "</div>
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsTab\\AverageRating", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProduct", array(), "method")))), "html", null, true);
        echo "
  </div>

  ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProduct", array(), "method"), "getReviewsCount", array(), "method") > 0)) {
            // line 14
            echo "    <div class=\"buttons\">
      ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.general"))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 18
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_tab/parts/tab.reviews_list_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 18,  39 => 15,  36 => 14,  34 => 13,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Reviews list header*/
/*  #*/
/*  # @ListChild (list="product.reviews.tab", weight="200")*/
/*  #}*/
/* */
/* <div class="header">*/
/*   <div class="left">*/
/*     <div class="head-h2">{{ t('Customer reviews') }}</div>*/
/*     {{ widget('XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsTab\\AverageRating', product=this.getProduct()) }}*/
/*   </div>*/
/* */
/*   {% if this.getProduct().getReviewsCount() > 0 %}*/
/*     <div class="buttons">*/
/*       {{ widget_list('reviews.general') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
