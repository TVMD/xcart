<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/rating.twig */
class __TwigTemplate_c411648221ba3104ed06705d5dd18b1854f996c576b6d4f27b868018e22213e7 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAverageRatingOnPage", array(), "method")) {
            // line 8
            echo "  <div class=\"rating";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method")) {
                echo " edit";
            }
            echo "\">
    ";
            // line 9
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method")) {
                // line 10
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating", "fieldName" => "rating", "rate" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method"), "is_editable" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method"), "max" => "5"))), "html", null, true);
                echo "
    ";
            }
            // line 12
            echo "    ";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method")) {
                // line 13
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method"), "max" => "5"))), "html", null, true);
                echo "
    ";
            }
            // line 15
            echo "    <br />
  
    ";
            // line 17
            if (("tab" != $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "place", array()))) {
                // line 18
                echo "      <div class=\"rating-tooltip\">
        ";
                // line 19
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.tooltip.rating"))), "html", null, true);
                echo "
      </div>
    ";
            }
            // line 22
            echo "  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 22,  57 => 19,  54 => 18,  52 => 17,  48 => 15,  42 => 13,  39 => 12,  33 => 10,  31 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Rating*/
/*  #*/
/*  # @ListChild (list="reviews.product.rating.form.content", weight="100")*/
/*  #}*/
/* */
/* {% if this.isVisibleAverageRatingOnPage() %}*/
/*   <div class="rating{% if this.isAllowedRateProduct() %} edit{% endif %}">*/
/*     {% if this.isAllowedRateProduct() %}*/
/*       {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating', fieldName='rating', rate=this.getAverageRating(), is_editable=this.isAllowedRateProduct(), max='5') }}*/
/*     {% endif %}*/
/*     {% if not this.isAllowedRateProduct() %}*/
/*       {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\VoteBar', rate=this.getAverageRating(), max='5') }}*/
/*     {% endif %}*/
/*     <br />*/
/*   */
/*     {% if 'tab' != this.place %}*/
/*       <div class="rating-tooltip">*/
/*         {{ widget_list('reviews.tooltip.rating') }}*/
/*       </div>*/
/*     {% endif %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
