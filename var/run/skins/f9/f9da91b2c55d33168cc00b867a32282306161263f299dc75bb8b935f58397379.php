<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/product/details/rating.twig */
class __TwigTemplate_2d9e3beb5d3b34c1b2d4f15a646eddcdfc739e4e2625ea5b89a6490265c31fea extends \XLite\Core\Templating\Twig\Template
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
            echo "  <div class=\"product-average-rating\">
    <input type=\"hidden\" name=\"target_widget\"
           value=\"\\XLite\\Module\\XC\\Reviews\\View\\Customer\\ProductInfo\\Details\\AverageRating\"/>
    <input type=\"hidden\" name=\"widgetMode\" value=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWidgetMode", array(), "method"), "html", null, true);
            echo "\"/>
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "reviews.product.rating", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProduct", array(), "method")))), "html", null, true);
            echo "
    ";
            // line 13
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleReviewsCount", array(), "method")) {
                // line 14
                echo "      <div class=\"reviews-count no-reviews\">
        &mdash;
        <a href=\"";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProductURL", array(), "method"), "html", null, true);
                echo "\" class=\"link-to-tab\">
          ";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method"), "html", null, true);
                echo "
        </a>
      </div>
    ";
            }
            // line 21
            echo "    ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAddReviewLink", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())), "method")) {
                // line 22
                echo "      <span class=\"separator\">|</span>
      ";
                // line 23
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isReplaceAddReviewWithLogin", array(), "method")) {
                    // line 24
                    echo "        ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\PopupLoginLink", "label" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsLinkLabel", array(), "method"), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                    echo "
      ";
                } else {
                    // line 26
                    echo "        <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatedProductURL", array(), "method"), "html", null, true);
                    echo "\" class=\"link-to-tab\">
          ";
                    // line 27
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReviewLink", "label" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsLinkLabel", array(), "method"), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                    echo "
        </a>
      ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/product/details/rating.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 31,  79 => 30,  73 => 27,  68 => 26,  62 => 24,  60 => 23,  57 => 22,  54 => 21,  47 => 17,  43 => 16,  39 => 14,  37 => 13,  33 => 12,  29 => 11,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Rating value in product info*/
/*  #*/
/*  # @ListChild (list="reviews.product.rating.average", weight="100")*/
/*  #}*/
/* */
/* {% if this.isVisibleAverageRatingOnPage() %}*/
/*   <div class="product-average-rating">*/
/*     <input type="hidden" name="target_widget"*/
/*            value="\XLite\Module\XC\Reviews\View\Customer\ProductInfo\Details\AverageRating"/>*/
/*     <input type="hidden" name="widgetMode" value="{{ this.getWidgetMode() }}"/>*/
/*     {{ widget_list('reviews.product.rating', product=this.getRatedProduct()) }}*/
/*     {% if this.isVisibleReviewsCount() %}*/
/*       <div class="reviews-count no-reviews">*/
/*         &mdash;*/
/*         <a href="{{ this.getRatedProductURL() }}" class="link-to-tab">*/
/*           {{ this.getReviewsCount() }}*/
/*         </a>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if this.isVisibleAddReviewLink(this.product) %}*/
/*       <span class="separator">|</span>*/
/*       {% if this.isReplaceAddReviewWithLogin() %}*/
/*         {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\PopupLoginLink', label=this.getReviewsLinkLabel(), product=this.product) }}*/
/*       {% else %}*/
/*         <a href="{{ this.getRatedProductURL() }}" class="link-to-tab">*/
/*           {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReviewLink', label=this.getReviewsLinkLabel(), product=this.product) }}*/
/*         </a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
