<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.city.twig */
class __TwigTemplate_ac93b9ff13c76c9e35709cdd35d3b58dfcb7381b5d502fa73f32c7d3ac253615 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "city"), "method")) {
            // line 8
            echo "  <li class=\"city\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "destination_city", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCity", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("City")), "required" => "true"))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.city.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping estimator : address : city*/
/*  #*/
/*  # @ListChild (list="shippingEstimator.address", weight="25")*/
/*  #}*/
/* */
/* {% if this.hasField('city') %}*/
/*   <li class="city">*/
/*     {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='destination_city', value=this.getCity(), label=t('City'), required='true') }}*/
/*   </li>*/
/* {% endif %}*/
/* */
