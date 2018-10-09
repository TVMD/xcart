<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.state.twig */
class __TwigTemplate_01017108bdd0e6e9e5fc4736ddf40a120bca3732541822222a8a198f1da6ce64 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isStateFieldVisible", array(), "method")) {
            // line 8
            echo "  <li class=\"state\">
    ";
            // line 9
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "country_code"), "method")) {
                // line 10
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\State", "fieldName" => "destination_state", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getState", array(), "method"), "style" => "field-required", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("State")), "required" => "true"))), "html", null, true);
                echo "
    ";
            }
            // line 12
            echo "    ";
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasField", array(0 => "country_code"), "method")) {
                // line 13
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\State", "fieldName" => "destination_state", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getState", array(), "method"), "style" => "field-required", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("State")), "required" => "true", "country" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountryCode", array(), "method")))), "html", null, true);
                echo "
    ";
            }
            // line 15
            echo "  </li>
";
        }
        // line 17
        echo "
";
        // line 18
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCustomStateFieldVisible", array(), "method")) {
            // line 19
            echo "  <li class=\"state\">
    ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "destination_custom_state", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOtherState", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("State"))))), "html", null, true);
            echo "
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/address.state.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 20,  53 => 19,  51 => 18,  48 => 17,  44 => 15,  38 => 13,  35 => 12,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping estimator : address : state*/
/*  #*/
/*  # @ListChild (list="shippingEstimator.address", weight="20")*/
/*  #}*/
/* */
/* {% if this.isStateFieldVisible() %}*/
/*   <li class="state">*/
/*     {% if this.hasField('country_code') %}*/
/*       {{ widget('\\XLite\\View\\FormField\\Select\\State', fieldName='destination_state', value=this.getState(), style='field-required', label=t('State'), required='true') }}*/
/*     {% endif %}*/
/*     {% if not this.hasField('country_code') %}*/
/*       {{ widget('\\XLite\\View\\FormField\\Select\\State', fieldName='destination_state', value=this.getState(), style='field-required', label=t('State'), required='true', country=this.getCountryCode()) }}*/
/*     {% endif %}*/
/*   </li>*/
/* {% endif %}*/
/* */
/* {% if this.isCustomStateFieldVisible() %}*/
/*   <li class="state">*/
/*     {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='destination_custom_state', value=this.getOtherState(), label=t('State')) }}*/
/*   </li>*/
/* {% endif %}*/
/* */
