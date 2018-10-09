<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/pins_status.twig */
class __TwigTemplate_de0ac15fd94801b85794643021e1251f9942b915bb58828ce084a43d346e8e7f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"pin-codes-status\">
  ";
        // line 9
        echo "  <div class=\"sold\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Label", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sold PINs")), "value" => ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getSoldPinCodesCount", array(), "method") . " ")))), "html", null, true);
        echo "
  </div>
  <div class=\"remaining\">
    ";
        // line 13
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAutoPinCodes", array(), "method")) {
            // line 14
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Label", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Remaining PINs")), "value" => ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getRemainingPinCodesCount", array(), "method") . " ")))), "html", null, true);
            echo "
    ";
        }
        // line 16
        echo "  </div>
</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/pins_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  34 => 14,  32 => 13,  26 => 10,  23 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Pin codes status box*/
/*  #*/
/*  # @ListChild (list="product.pinCodes", weight="300")*/
/*  #}*/
/* */
/* <div class="pin-codes-status">*/
/*   {# Do not remove whitespace in value="", it does not display the value of "0" without this whitespace. Or fix it somewhere else :) #}*/
/*   <div class="sold">*/
/*     {{ widget('\\XLite\\View\\FormField\\Label', label=t('Sold PINs'), value=this.product.getSoldPinCodesCount() ~ ' ') }}*/
/*   </div>*/
/*   <div class="remaining">*/
/*     {% if not this.product.getAutoPinCodes() %}*/
/*       {{ widget('\\XLite\\View\\FormField\\Label', label=t('Remaining PINs'), value=this.product.getRemainingPinCodesCount() ~ ' ') }}*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
/* <div class="clear"></div>*/
/* */
