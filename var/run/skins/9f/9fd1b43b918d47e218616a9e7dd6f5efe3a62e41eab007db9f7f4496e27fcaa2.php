<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.response.twig */
class __TwigTemplate_a2b74ccf169af797dac6931c2916b0c00a151de728cb5a2bf7f0b5aa7d2e9975 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getResponse", array(), "method")) {
            // line 7
            echo "  <div class=\"response\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.review.response", "review" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.response.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Review block*/
/*  #*/
/*  # @ListChild (list="reviews.review", weight="500")*/
/*  #}*/
/* {% if this.review.getResponse() %}*/
/*   <div class="response">*/
/*     {{ widget_list('reviews.review.response', review=this.review) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
