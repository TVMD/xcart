<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_page/reviews.twig */
class __TwigTemplate_6687fb6b8659a1c9de20b7ac1ca01d46d212cbc7a66abe86b3bd5a840d4dc318 extends \XLite\Core\Templating\Twig\Template
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

          <div class=\"line\"></div>
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </ul>
  ";
        }
        // line 20
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_page/reviews.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  49 => 18,  38 => 13,  33 => 12,  29 => 11,  26 => 10,  24 => 9,  19 => 6,);
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
/* */
/*           <div class="line"></div>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
