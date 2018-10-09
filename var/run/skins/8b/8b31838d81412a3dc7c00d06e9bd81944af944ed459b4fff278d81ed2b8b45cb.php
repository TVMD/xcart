<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/reviews.twig */
class __TwigTemplate_f6e764c19e2f499eaf5a559d99c7a3a3765aed7fb56fa17870592703e98d0e3a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"reviews\">

  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method")) {
            // line 10
            echo "    <ul class=\"reviews-list\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 12
                echo "        <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getClass", array(0 => $context["review"]), "method"), "html", null, true);
                echo "\">
          ";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.review", "review" => $context["review"]))), "html", null, true);
                echo "
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
  ";
        }
        // line 18
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  47 => 16,  38 => 13,  33 => 12,  29 => 11,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Reviews list*/
/*  #*/
/*  # @ListChild (list="reviews")*/
/*  #}*/
/* */
/* <div class="reviews">*/
/* */
/*   {% if this.getPageData() %}*/
/*     <ul class="reviews-list">*/
/*       {% for review in this.getPageData() %}*/
/*         <li class="{{ this.getClass(review) }}">*/
/*           {{ widget_list('reviews.review', review=review) }}*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
