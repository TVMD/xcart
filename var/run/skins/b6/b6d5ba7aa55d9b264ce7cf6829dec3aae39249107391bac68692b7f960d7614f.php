<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.text.twig */
class __TwigTemplate_75e00054e93f55f278ae26678bfba808ed59ff157072393ede8899e4a513a1c2 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"text\">
  ";
        // line 7
        echo nl2br(XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "review", array()), "getReview", array(), "method"), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/review.text.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Review block*/
/*  #*/
/*  # @ListChild (list="reviews.review", weight="300")*/
/*  #}*/
/* <div class="text">*/
/*   {{ this.review.getReview()|nl2br }}*/
/* </div>*/
/* */
