<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/enabled_checkbox.twig */
class __TwigTemplate_abc7752cde0de403ca3b45bafea2427f74481f698341e65c39af4939797c00a5 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"pin-codes-enabled\">
   ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\YesNo", "label" => "PIN codes enabled", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getPinCodesEnabled", array(), "method"), "fieldName" => "pins_enabled", "fieldId" => "enabled-checkbox"))), "html", null, true);
        echo "
</div>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/enabled_checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Pin codes enabled checkbox*/
/*  #*/
/*  # @ListChild (list="product.pinCodes", weight="100")*/
/*  #}*/
/* */
/* <div class="pin-codes-enabled">*/
/*    {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox\\YesNo', label='PIN codes enabled', value=this.product.getPinCodesEnabled(), fieldName='pins_enabled', fieldId='enabled-checkbox') }}*/
/* </div>*/
/* <div class="clear"></div>*/
/* */
