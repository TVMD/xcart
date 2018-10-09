<?php

/* modules/XC/Reviews/average_rating/rating.twig */
class __TwigTemplate_7360fab346c6d1b8d6097f564b9a4a211ce43c05a1e2b8a4e6a1ce164c180a05 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAverageRatingOnPage", array(), "method")) {
            // line 6
            echo "    <div class=\"rating";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method")) {
                echo " edit";
            }
            echo "\">
        ";
            // line 7
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method")) {
                // line 8
                echo "            ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating", "fieldName" => "rating", "rate" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method"), "is_editable" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method"), "max" => "5"))), "html", null, true);
                echo "
        ";
            }
            // line 10
            echo "        ";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedRateProduct", array(), "method")) {
                // line 11
                echo "            ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method"), "max" => "5"))), "html", null, true);
                echo "
        ";
            }
            // line 13
            echo "
        ";
            // line 14
            if (("tab" != $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "place", array()))) {
                // line 15
                echo "            <div class=\"rating-tooltip\">
                ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.tooltip.rating"))), "html", null, true);
                echo "
            </div>
        ";
            }
            // line 19
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/average_rating/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 19,  56 => 16,  53 => 15,  51 => 14,  48 => 13,  42 => 11,  39 => 10,  33 => 8,  31 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Rating*/
/*  #}*/
/* */
/* {% if this.isVisibleAverageRatingOnPage() %}*/
/*     <div class="rating{% if this.isAllowedRateProduct() %} edit{% endif %}">*/
/*         {% if this.isAllowedRateProduct() %}*/
/*             {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\FormField\\Input\\Rating', fieldName='rating', rate=this.getAverageRating(), is_editable=this.isAllowedRateProduct(), max='5') }}*/
/*         {% endif %}*/
/*         {% if not this.isAllowedRateProduct() %}*/
/*             {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\VoteBar', rate=this.getAverageRating(), max='5') }}*/
/*         {% endif %}*/
/* */
/*         {% if 'tab' != this.place %}*/
/*             <div class="rating-tooltip">*/
/*                 {{ widget_list('reviews.tooltip.rating') }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*     </div>*/
/* {% endif %}*/
/* */
