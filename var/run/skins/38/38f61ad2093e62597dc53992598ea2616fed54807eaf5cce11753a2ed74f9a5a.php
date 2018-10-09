<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.left.twig */
class __TwigTemplate_1051f9b95a3ce2e332092971c3b0370313e25ec935702ce765ff69e834c860f4 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"info\">
  <div class=\"reviewer-name\">
    ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getReviewerName", array(), "method")) {
            // line 9
            echo "      <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getReviewerName", array(), "method"), "html", null, true);
            echo "</span>
    ";
        }
        // line 11
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getReviewerName", array(), "method")) {
            // line 12
            echo "      <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Anonymous reviewer")), "html", null, true);
            echo "</span>
    ";
        }
        // line 14
        echo "  </div>
  <div class=\"date\">
    ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getAdditionDate", array(), "method")), "method"), "html", null, true);
        echo "
  </div>
</div>
";
        // line 19
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOwnReview", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())), "method")) {
            // line 20
            echo "  <div class=\"separator\"></div>
";
        }
        // line 22
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isOnModeration", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array())), "method")) {
            // line 23
            echo "  <div class=\"approved-separator\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/title.left.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 23,  56 => 22,  52 => 20,  50 => 19,  44 => 16,  40 => 14,  34 => 12,  31 => 11,  25 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Review block*/
/*  #*/
/*  # @ListChild (list="reviews.review.title", weight="100")*/
/*  #}*/
/* <div class="info">*/
/*   <div class="reviewer-name">*/
/*     {% if this.review.getReviewerName() %}*/
/*       <span>{{ this.review.getReviewerName() }}</span>*/
/*     {% endif %}*/
/*     {% if not this.review.getReviewerName() %}*/
/*       <span>{{ t('Anonymous reviewer') }}</span>*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="date">*/
/*     {{ this.formatTime(this.review.getAdditionDate()) }}*/
/*   </div>*/
/* </div>*/
/* {% if this.isOwnReview(this.review) %}*/
/*   <div class="separator"></div>*/
/* {% endif %}*/
/* {% if not this.isOnModeration(this.review) %}*/
/*   <div class="approved-separator"></div>*/
/* {% endif %}*/
/* */
