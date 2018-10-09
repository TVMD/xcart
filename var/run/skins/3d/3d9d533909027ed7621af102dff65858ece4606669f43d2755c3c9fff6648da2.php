<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_tab/parts/tab.reviews_list_header.twig */
class __TwigTemplate_e9f5df4ae23c9ec17c0db224dd6f0981e06c8b4a0c45e554215aef24b0f9ce62 extends \XLite\Core\Templating\Twig\Template
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

  <div class=\"right\">
    <div class=\"buttons\">
      ";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.general"))), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"line\"></div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_tab/parts/tab.reviews_list_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  28 => 10,  24 => 9,  19 => 6,);
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
/*   <div class="right">*/
/*     <div class="buttons">*/
/*       {{ widget_list('reviews.general') }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="line"></div>*/
/* */
/* </div>*/
/* */
