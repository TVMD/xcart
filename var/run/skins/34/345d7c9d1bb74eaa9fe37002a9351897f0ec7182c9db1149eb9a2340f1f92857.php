<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/common_attributes/common.product-attributes.weight.twig */
class __TwigTemplate_aa5e46aaf2467f686eddd67d92fdcd49694c460d3a2b7369c062e152ea5a725f extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWeight", array(), "method") != 0)) {
            // line 7
            echo "  <li class=\"product-weight\">
    <div><strong>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Weight")), "html", null, true);
            echo "</strong></div>
    <span>";
            // line 9
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatWeight", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWeight", array(), "method")), "method");
            echo "</span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/common_attributes/common.product-attributes.weight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details Weight main block*/
/*  #*/
/*  # @ListChild (list="product.details.common.product-attributes.elements", weight="100")*/
/*  #}*/
/* {% if this.getWeight() != 0 %}*/
/*   <li class="product-weight">*/
/*     <div><strong>{{ t('Weight') }}</strong></div>*/
/*     <span>{{ this.formatWeight(this.getWeight())|raw }}</span>*/
/*   </li>*/
/* {% endif %}*/
/* */
