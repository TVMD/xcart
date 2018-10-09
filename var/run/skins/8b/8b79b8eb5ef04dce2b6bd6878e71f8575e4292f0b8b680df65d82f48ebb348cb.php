<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/auto_generate.twig */
class __TwigTemplate_d4b9f8bb4298d56d56d433f35945b451239c0b4431b656b7c682ff2537712dc7 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"pin-codes-auto\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\PINCodes\\View\\FormField\\Select\\AutoPinCodes", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAutoPinCodes", array(), "method"), "fieldName" => "autoPinCodes", "label" => "PIN codes generation method"))), "html", null, true);
        echo "
  <div class=\"clear\"></div>
  ";
        // line 10
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getPinCodesEnabled", array(), "method")) {
            // line 11
            echo "    <div class=\"can-add-after-saving\">
      ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You will be able to add pin codes after saving changes.")), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 15
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/auto_generate.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  33 => 12,  30 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Pin codes enabled checkbox*/
/*  #*/
/*  # @ListChild (list="product.pinCodes", weight="200")*/
/*  #}*/
/* */
/* <div class="pin-codes-auto">*/
/*   {{ widget('\\XLite\\Module\\CDev\\PINCodes\\View\\FormField\\Select\\AutoPinCodes', value=this.product.getAutoPinCodes(), fieldName='autoPinCodes', label='PIN codes generation method') }}*/
/*   <div class="clear"></div>*/
/*   {% if not this.product.getPinCodesEnabled() %}*/
/*     <div class="can-add-after-saving">*/
/*       {{ t('You will be able to add pin codes after saving changes.') }}*/
/*     </div>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
