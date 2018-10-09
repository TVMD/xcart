<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_page/parts/title.right.twig */
class __TwigTemplate_5358f8c7cdc15041a6139cec6363cff242bc7c9475db94123f7a18a3986417f4 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"right-actions\">
  ";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOnModeration", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())), "method")) {
            // line 8
            echo "    <div class=\"moderation\">
      <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("On moderation")), "html", null, true);
            echo "</span>
    </div>
  ";
        }
        // line 12
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOwnReview", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())), "method")) {
            // line 13
            echo "    <div class=\"separator\"></div>
  ";
        }
        // line 15
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOwnReview", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())), "method")) {
            // line 16
            echo "    <div class=\"buttons\">
      ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\EditReview", "label" => "Edit", "review" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())))), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 20
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/modules/XC/Reviews/reviews_page/parts/title.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 20,  46 => 17,  43 => 16,  40 => 15,  36 => 13,  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Review management buttons*/
/*  #*/
/*  # @ListChild (list="reviews.review.title", weight="200")*/
/*  #}*/
/* <div class="right-actions">*/
/*   {% if this.isOnModeration(this.review) %}*/
/*     <div class="moderation">*/
/*       <span>{{ t('On moderation') }}</span>*/
/*     </div>*/
/*   {% endif %}*/
/*   {% if this.isOwnReview(this.review) %}*/
/*     <div class="separator"></div>*/
/*   {% endif %}*/
/*   {% if this.isOwnReview(this.review) %}*/
/*     <div class="buttons">*/
/*       {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\EditReview', label='Edit', review=this.review) }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
