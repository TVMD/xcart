<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/reviews/buttons/addReview.twig */
class __TwigTemplate_8e6b03d2f34c05b6c07ef79dd60897121438f0a168f3b23bc2fa13567f53a26f extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductId", array(), "method")) {
            // line 9
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Button\\Admin\\AddReview", "style" => "add-review", "target_product_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductId", array(), "method")))), "html", null, true);
            echo "
";
        }
        // line 11
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductId", array(), "method")) {
            // line 12
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Reviews\\View\\Button\\Admin\\AddReview", "style" => "add-review"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Reviews/reviews/buttons/addReview.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  30 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Add review button template*/
/*  #*/
/*  # @listChild (list="itemsList.xc.reviews.review.header")*/
/*  # @listChild (list="itemsList.xc.reviews.productreview.header")*/
/*  #}*/
/* */
/* {% if this.getProductId() %}*/
/*   {{ widget('XLite\\Module\\XC\\Reviews\\View\\Button\\Admin\\AddReview', style='add-review', target_product_id=this.getProductId()) }}*/
/* {% endif %}*/
/* {% if not this.getProductId() %}*/
/*   {{ widget('XLite\\Module\\XC\\Reviews\\View\\Button\\Admin\\AddReview', style='add-review') }}*/
/* {% endif %}*/
/* */
