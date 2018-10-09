<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.right.twig */
class __TwigTemplate_77d752964d47c7a7406bef90d12c07c74993762833ea4c134d13b03c4895f4f3 extends \XLite\Core\Templating\Twig\Template
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
            echo "    <div class=\"moderation\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("On moderation")), "html", null, true);
            echo "</div>
  ";
        }
        // line 10
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOwnReview", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())), "method")) {
            // line 11
            echo "    <div class=\"separator\"></div>
  ";
        }
        // line 13
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOwnReview", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())), "method")) {
            // line 14
            echo "    <div class=\"buttons\">
      ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\EditReview", "label" => " ", "review" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())))), "html", null, true);
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
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.right.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  43 => 15,  40 => 14,  37 => 13,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Review management buttons*/
/*  #*/
/*  # @ListChild (list="reviews.review.title", weight="200")*/
/*  #}*/
/* <div class="right-actions">*/
/*   {% if this.isOnModeration(this.review) %}*/
/*     <div class="moderation">{{ t('On moderation') }}</div>*/
/*   {% endif %}*/
/*   {% if this.isOwnReview(this.review) %}*/
/*     <div class="separator"></div>*/
/*   {% endif %}*/
/*   {% if this.isOwnReview(this.review) %}*/
/*     <div class="buttons">*/
/*       {{ widget('\\XLite\\Module\\XC\\Reviews\\View\\Button\\Customer\\EditReview', label=' ', review=this.review) }}*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* */
