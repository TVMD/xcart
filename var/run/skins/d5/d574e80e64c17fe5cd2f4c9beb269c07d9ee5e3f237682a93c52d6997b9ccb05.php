<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.image-previous.twig */
class __TwigTemplate_81feaa159dbee48b2ddc93ccc80806d575f190014070d699c8617d3209ead3ab extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImages", array(), "method") && ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "countImages", array(), "method") != 1))) {
            // line 7
            echo "  <a class=\"arrow left-arrow\" href=\"javascript:void(0);\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" alt=\"Previous image\" /></a>
";
        }
        // line 9
        if ( !($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImages", array(), "method") || ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "countImages", array(), "method") == 1))) {
            // line 10
            echo "  <span class=\"arrow left-arrow\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.image-previous.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 10,  27 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details image box*/
/*  #*/
/*  # @ListChild (list="product.details.page.image.photo", weight="5")*/
/*  #}*/
/* {% if this.product.getImages() and this.product.countImages() != 1 %}*/
/*   <a class="arrow left-arrow" href="javascript:void(0);"><img src="{{ asset('images/spacer.gif') }}" alt="Previous image" /></a>*/
/* {% endif %}*/
/* {% if not (this.product.getImages() or this.product.countImages() == 1) %}*/
/*   <span class="arrow left-arrow"></span>*/
/* {% endif %}*/
/* */
