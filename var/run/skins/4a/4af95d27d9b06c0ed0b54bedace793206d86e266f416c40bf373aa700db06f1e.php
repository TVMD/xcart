<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.image-next.twig */
class __TwigTemplate_de192bdc66d40651d42570c61456a593ff09c398662f9089cf893e7c0eaaffe9 extends \XLite\Core\Templating\Twig\Template
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
            echo "  <a class=\"arrow right-arrow\" href=\"javascript:void(0);\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" alt=\"Next image\" /></a>
";
        }
        // line 9
        if ( !($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImages", array(), "method") || ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "countImages", array(), "method") == 1))) {
            // line 10
            echo "  <span class=\"arrow right-arrow\"></span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.image-next.twig";
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
/*  # @ListChild (list="product.details.page.image.photo", weight="15")*/
/*  #}*/
/* {% if this.product.getImages() and this.product.countImages() != 1 %}*/
/*   <a class="arrow right-arrow" href="javascript:void(0);"><img src="{{ asset('images/spacer.gif') }}" alt="Next image" /></a>*/
/* {% endif %}*/
/* {% if not (this.product.getImages() or this.product.countImages() == 1) %}*/
/*   <span class="arrow right-arrow"></span>*/
/* {% endif %}*/
/* */
