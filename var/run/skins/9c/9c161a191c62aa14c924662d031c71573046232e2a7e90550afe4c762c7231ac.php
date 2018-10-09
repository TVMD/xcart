<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/page.product.twig */
class __TwigTemplate_647f18b970f06b4871d06455c75e7f0b255f87e82b796e2b682a192edeed72d9 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())) {
            // line 8
            echo "  <div class=\"product-details product-reviews-details clearfix\">
    <div class=\"image";
            // line 9
            if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "hasImage", array(), "method")) {
                echo " empty";
            }
            echo "\" style=\"width: ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMaxImageWidth", array(), "method"), "html", null, true);
            echo "px;\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\Details\\Customer\\Image", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
            echo "
    </div>
    <div class=\"product-details-info\">
      <h1 class=\"fn title\">";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"), "html", null, true);
            echo "</h1>
      <a href=\"";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product", "", array("product_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductId", array(), "method"), "category_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCategoryId", array(), "method")))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Back to product details")), "html", null, true);
            echo "</a>
  
      <div>
        ";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsPage\\AverageRating", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
            echo "
      </div>
    </div>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/reviews_page/parts/page.product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  45 => 14,  41 => 13,  35 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product info on product reviews page*/
/*  #*/
/*  # @ListChild (list="product.reviews.page", weight="100")*/
/*  #}*/
/* */
/* {% if this.product %}*/
/*   <div class="product-details product-reviews-details clearfix">*/
/*     <div class="image{% if not this.product.hasImage() %} empty{% endif %}" style="width: {{ this.getMaxImageWidth() }}px;">*/
/*       {{ widget('\\XLite\\View\\Product\\Details\\Customer\\Image', product=this.product) }}*/
/*     </div>*/
/*     <div class="product-details-info">*/
/*       <h1 class="fn title">{{ this.getTitle() }}</h1>*/
/*       <a href="{{ url('product', '', {'product_id': this.getProductId(), 'category_id': this.getCategoryId()}) }}">{{ t('Back to product details') }}</a>*/
/*   */
/*       <div>*/
/*         {{ widget('XLite\\Module\\XC\\Reviews\\View\\Customer\\ReviewsPage\\AverageRating', product=this.product) }}*/
/*       </div>*/
/*     </div>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
