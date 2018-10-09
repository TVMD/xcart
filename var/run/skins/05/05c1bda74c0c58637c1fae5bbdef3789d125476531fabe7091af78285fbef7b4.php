<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/product/details/parts/common.coming_soon.twig */
class __TwigTemplate_b2c63dc7618aa614b74d7bc7075bf9a467938ac0a26e9906879fb0ebc6a6a0e9 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isUpcomingProduct", array(), "method")) {
            // line 9
            echo "  <span class=\"coming-soon-label\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Labels", "labels" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getComingSoonLabel", array(), "method")))), "html", null, true);
            echo "

    ";
            // line 12
            if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "CDev", array()), "ProductAdvisor", array()), "cs_display_date", array())) {
                // line 13
                echo "      <span class=\"coming-soon-note\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Expected on")), "html", null, true);
                echo " <span class=\"coming-soon-date\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getArrivalDate", array(), "method")), "method"), "html", null, true);
                echo "</span></span>
    ";
            }
            // line 15
            echo "  </span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/product/details/parts/common.coming_soon.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  34 => 13,  32 => 12,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Quantity input box*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="19")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="19")*/
/*  #}*/
/* */
/* {% if this.product.isUpcomingProduct() %}*/
/*   <span class="coming-soon-label">*/
/*     {{ widget('XLite\\View\\Labels', labels=this.getComingSoonLabel()) }}*/
/* */
/*     {% if this.config.CDev.ProductAdvisor.cs_display_date %}*/
/*       <span class="coming-soon-note">{{ t('Expected on') }} <span class="coming-soon-date">{{ this.formatDate(this.product.getArrivalDate()) }}</span></span>*/
/*     {% endif %}*/
/*   </span>*/
/* {% endif %}*/
/* */
