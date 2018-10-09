<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/main.methods.twig */
class __TwigTemplate_fb63044248f8d7a73530285b5560082116f6e8d3de96c65bf70074be9df51269 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEstimate", array(), "method")) {
            // line 7
            echo "  <div class=\"estimate-methods\">
    <div class=\"head-h3\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Choose shipping method")), "html", null, true);
            echo "</div>
    ";
            // line 9
            $this->startForm("XLite\\View\\Form\\Cart\\ShippingEstimator\\Change", array("className" => "method-change"));            // line 10
            echo "  
      ";
            // line 11
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasRates", array(), "method")) {
                // line 12
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ShippingList"))), "html", null, true);
                echo "
  
        <div class=\"buttons main\">
          ";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Submit", "label" => "Save"))), "html", null, true);
                echo "
        </div>
      ";
            } else {
                // line 18
                echo "        <p class=\"error\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping methods are not available")), "html", null, true);
                echo "</p>
      ";
            }
            // line 20
            echo "  
    ";
            $this->endForm();            // line 22
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/shipping_estimator/parts/main.methods.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 22,  53 => 20,  47 => 18,  41 => 15,  34 => 12,  32 => 11,  29 => 10,  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping estimator : methods*/
/*  #*/
/*  # @ListChild (list="shippingEstimator.main", weight="20")*/
/*  #}*/
/* {% if this.isEstimate() %}*/
/*   <div class="estimate-methods">*/
/*     <div class="head-h3">{{ t('Choose shipping method') }}</div>*/
/*     {% form 'XLite\\View\\Form\\Cart\\ShippingEstimator\\Change' with {className: 'method-change'} %}*/
/*   */
/*       {% if this.hasRates() %}*/
/*         {{ widget('XLite\\View\\ShippingList') }}*/
/*   */
/*         <div class="buttons main">*/
/*           {{ widget('XLite\\View\\Button\\Submit', label='Save') }}*/
/*         </div>*/
/*       {% else %}*/
/*         <p class="error">{{ t('Shipping methods are not available') }}</p>*/
/*       {% endif %}*/
/*   */
/*     {% endform %}*/
/*   </div>*/
/* {% endif %}*/
/* */
