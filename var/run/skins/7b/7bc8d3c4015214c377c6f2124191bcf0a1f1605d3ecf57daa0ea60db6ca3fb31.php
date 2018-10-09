<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_tab/parts/tab.all_reviews_link.twig */
class __TwigTemplate_50c2be2879cd131f09331378d502ed9f33d59120cae2126c6cd566baf7504c29 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayReadAllReviewsLink", array(), "method")) {
            // line 8
            echo "  <div class=\"link\">
    <div class=\"line\"></div>
    <a href=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product_reviews", "", array("product_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getProductId", array(), "method"), "category_id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getCategoryId", array(), "method")))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Read all reviews about the product")), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getReviewsCount", array(), "method"), "html", null, true);
            echo ")</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_tab/parts/tab.all_reviews_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Read all reviews link*/
/*  #*/
/*  # @ListChild (list="product.reviews.tab", weight="500")*/
/*  #}*/
/* */
/* {% if this.isDisplayReadAllReviewsLink() %}*/
/*   <div class="link">*/
/*     <div class="line"></div>*/
/*     <a href="{{ url('product_reviews', '', {'product_id': this.product.getProductId(), 'category_id': this.product.getCategoryId()}) }}">{{ t('Read all reviews about the product') }} ({{ this.product.getReviewsCount() }})</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
