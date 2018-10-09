<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.rating.twig */
class __TwigTemplate_61e9995e378b7df314290cf9b2c16660131ad69a3baaeef5d49340147c0fd4be extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"rating clearfix\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getRating", array(), "method"), "max" => "5"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.rating.twig";
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
/*  # @ListChild (list="reviews.review", weight="200")*/
/*  #}*/
/* <div class="rating clearfix">*/
/*   {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\VoteBar', rate=this.review.getRating(), max='5') }}*/
/* </div>*/
/* */
