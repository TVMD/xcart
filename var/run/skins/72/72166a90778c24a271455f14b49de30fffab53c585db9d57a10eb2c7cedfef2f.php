<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/text.twig */
class __TwigTemplate_2ef4248730e259c98b47419e4f7f5da2bfe18cc4c4229a9cc7e03d33282b9c42 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "<div class=\"text\">
  ";
        // line 8
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method") > 0)) {
            // line 9
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Score: X. Votes: Y", array("score" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method"), "votes" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVotesCount", array(), "method")))), "html", null, true);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAverageRating", array(), "method") == 0)) {
            // line 12
            echo "    <div>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Not rated yet")), "html", null, true);
            echo "</div>
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  33 => 12,  30 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Rating value in text*/
/*  #*/
/*  # @ListChild (list="reviews.page.rating", weight="200")*/
/*  # @ListChild (list="reviews.tooltip.rating", weight="200")*/
/*  #}*/
/* <div class="text">*/
/*   {% if this.getAverageRating() > 0 %}*/
/*     <div>{{ t('Score: X. Votes: Y', {'score': this.getAverageRating(), 'votes': this.getVotesCount()}) }}</div>*/
/*   {% endif %}*/
/*   {% if this.getAverageRating() == 0 %}*/
/*     <div>{{ t('Not rated yet') }}</div>*/
/*   {% endif %}*/
/* </div>*/
/* */
