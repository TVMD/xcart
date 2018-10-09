<?php

/* modules/XC/Reviews/average_rating/text.twig */
class __TwigTemplate_8976f134fecee81c616f0b03d0e0e6ae483b116ca9340daad2fb8880260f5faf extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"text\">
  ";
        // line 5
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVotesCount", array(), "method") > 0)) {
            // line 6
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score: X. Votes: Y", array("score" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method"), "votes" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVotesCount", array(), "method")))), "html", null, true);
            echo "</div>
    ";
            // line 7
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method") > 0)) {
                // line 8
                echo "      <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Reviews: X", array("count" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getReviewsCount", array(), "method")))), "html", null, true);
                echo "</div>
    ";
            } else {
                // line 10
                echo "      <div>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No reviews.")), "html", null, true);
                echo "</div>
    ";
            }
            // line 12
            echo "  ";
        } else {
            // line 13
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Not rated yet")), "html", null, true);
            echo "</div>
  ";
        }
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/Reviews/average_rating/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  46 => 13,  43 => 12,  37 => 10,  31 => 8,  29 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Rating value in text*/
/*  #}*/
/* <div class="text">*/
/*   {% if this.getVotesCount() > 0 %}*/
/*     <div>{{ t('Score: X. Votes: Y', {'score': this.getAverageRating(), 'votes': this.getVotesCount()}) }}</div>*/
/*     {% if this.getReviewsCount() > 0 %}*/
/*       <div>{{ t('Reviews: X', {'count': this.getReviewsCount()}) }}</div>*/
/*     {% else %}*/
/*       <div>{{ t('No reviews.') }}</div>*/
/*     {% endif %}*/
/*   {% else %}*/
/*     <div>{{ t('Not rated yet') }}</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
