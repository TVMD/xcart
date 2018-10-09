<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list_header.twig */
class __TwigTemplate_bfae846699b254d07d87c1a6fc7308bd65878a2ea2b0cb277cdcb840334f8fa5 extends \XLite\Core\Templating\Twig\Template
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
    <div class=\"head-h3\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Customer reviews")), "html", null, true);
        echo "</div>
  </div>

  <div class=\"buttons\">
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.general"))), "html", null, true);
        echo "
  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_page/parts/page.reviews_list_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 13,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Reviews list header*/
/*  #*/
/*  # @ListChild (list="product.reviews.page", weight="200")*/
/*  #}*/
/* */
/* <div class="header">*/
/*   <div class="left">*/
/*     <div class="head-h3">{{ t('Customer reviews') }}</div>*/
/*   </div>*/
/* */
/*   <div class="buttons">*/
/*     {{ widget_list('reviews.general') }}*/
/*   </div>*/
/* */
/* </div>*/
/* */
