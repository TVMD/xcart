<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/expected.twig */
class __TwigTemplate_b1116fbd5241d8e8c0a2ecf487ce011f83d09a5826e1924b3d9e98574819b9de extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isUpcomingProduct", array(), "method") && $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "CDev", array()), "ProductAdvisor", array()), "cs_display_date", array()))) {
            // line 9
            echo "  <span class=\"coming-soon-note\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Expected on")), "html", null, true);
            echo " <span class=\"coming-soon-date\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatDate", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getArrivalDate", array(), "method")), "method"), "html", null, true);
            echo "</span></span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/expected.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Product low stock label*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="32")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="2001")*/
/*  #}*/
/* */
/* {% if this.product.isUpcomingProduct() and this.config.CDev.ProductAdvisor.cs_display_date %}*/
/*   <span class="coming-soon-note">{{ t('Expected on') }} <span class="coming-soon-date">{{ this.formatDate(this.product.getArrivalDate()) }}</span></span>*/
/* {% endif %}*/
/* */
