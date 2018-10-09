<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.zipcode.twig */
class __TwigTemplate_1d88090331162e7548397a233a2565d75d4cc94a296895d7c4318985ca967134 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "zipcode"), "method")) {
            // line 8
            echo "  <li class=\"zipcode\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "destination_zipcode", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getZipcode", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zip code")), "required" => "true"))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.zipcode.twig";
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
/*  # @ListChild (list="shippingEstimator.address", weight="30")*/
/*  #}*/
/* */
/* {% if this.hasField('zipcode') %}*/
/*   <li class="zipcode">*/
/*     {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='destination_zipcode', value=this.getZipcode(), label=t('Zip code'), required='true') }}*/
/*   </li>*/
/* {% endif %}*/
/* */
