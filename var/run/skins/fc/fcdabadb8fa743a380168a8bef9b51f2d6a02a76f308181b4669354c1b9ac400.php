<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/button/add_review.twig */
class __TwigTemplate_63300701476090d46498efca32ffdec6a5e6f865cb7a6300500658c7d6aac5ac extends \XLite\Core\Templating\Twig\Template
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
        echo "<div id=\"product-reviews-button\">
    ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAllowedAddReview", array(), "method")) {
            // line 8
            echo "      ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isReplaceAddReviewWithLogin", array(), "method")) {
                // line 9
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\PopupLogin", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add review")), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                echo "
      ";
            } else {
                // line 11
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReview", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add review")), "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
                echo "
      ";
            }
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      <div class=\"add-review-button-disabled\">
          ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddReviewMessage", array(), "method"), "html", null, true);
            echo "
      </div>
    ";
        }
        // line 18
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/button/add_review.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  45 => 15,  42 => 14,  39 => 13,  33 => 11,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Button 'Add review'*/
/*  #*/
/*  # @ListChild (list="reviews.general", weight="20")*/
/*  #}*/
/* <div id="product-reviews-button">*/
/*     {% if this.isAllowedAddReview() %}*/
/*       {% if this.isReplaceAddReviewWithLogin() %}*/
/*         {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\PopupLogin', label=t('Add review'), product=this.product) }}*/
/*       {% else %}*/
/*         {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\AddReview', label=t('Add review'), product=this.product) }}*/
/*       {% endif %}*/
/*     {% else %}*/
/*       <div class="add-review-button-disabled">*/
/*           {{ this.getAddReviewMessage() }}*/
/*       </div>*/
/*     {% endif %}*/
/* </div>*/
/* */
