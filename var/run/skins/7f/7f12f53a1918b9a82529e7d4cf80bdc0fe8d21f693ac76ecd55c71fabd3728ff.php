<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.type.twig */
class __TwigTemplate_64ecd7124ea336e62ce17afa400b9f6318a989092762a1dbb7dbad9028e4c0b9 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "type"), "method")) {
            // line 8
            echo "  <li class=\"type\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\AddressType", "fieldName" => "destination_type", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getType", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Type"))))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.type.twig";
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
/*  # Shipping estimator : address : zipcode*/
/*  #*/
/*  # @ListChild (list="shippingEstimator.address", weight="40")*/
/*  #}*/
/* */
/* {% if this.hasField('type') %}*/
/*   <li class="type">*/
/*     {{ widget('\\XLite\\View\\FormField\\Select\\AddressType', fieldName='destination_type', value=this.getType(), label=t('Type')) }}*/
/*   </li>*/
/* {% endif %}*/
/* */
