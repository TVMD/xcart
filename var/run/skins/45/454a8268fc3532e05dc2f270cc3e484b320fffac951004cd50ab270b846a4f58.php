<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.title.twig */
class __TwigTemplate_77ba4082484d2f8cfe6d7f70c5506c2f16c3dfe15e0218145f643fa6b113131c extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"title\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.review.title", "review" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())))), "html", null, true);
        echo "
  <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.title.twig";
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
/*  # Review block*/
/*  #*/
/*  # @ListChild (list="reviews.review", weight="100")*/
/*  #}*/
/* <div class="title">*/
/*   {{ widget_list('reviews.review.title', review=this.review) }}*/
/*   <div class="clear"></div>*/
/* </div>*/
/* */
