<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/response.title.twig */
class __TwigTemplate_1c354bb1a3e5b3f79102ece6deb4951f493ea70be0d6a5bf996d8ea575cd014b extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"title\">
  <div class=\"info\">
    <div class=\"reviewer-name\">
        <span>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getRespondentName", array(), "method"), "html", null, true);
        echo "</span>
    </div>
    <div class=\"date\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getResponseDate", array(), "method")), "method"), "html", null, true);
        echo "
    </div>
  </div>
  <div class=\"clear\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/response.title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Review block*/
/*  #*/
/*  # @ListChild (list="reviews.review.response", weight="100")*/
/*  #}*/
/* <div class="title">*/
/*   <div class="info">*/
/*     <div class="reviewer-name">*/
/*         <span>{{ this.review.getRespondentName() }}</span>*/
/*     </div>*/
/*     <div class="date">*/
/*       {{ this.formatTime(this.review.getResponseDate()) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="clear"></div>*/
/* </div>*/
/* */
