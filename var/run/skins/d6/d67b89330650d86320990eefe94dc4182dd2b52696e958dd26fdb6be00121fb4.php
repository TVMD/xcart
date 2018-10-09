<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/actions.twig */
class __TwigTemplate_d18a971ecb454fee58166bdff5ff00c1e1daecda84d3c5a094ba2cd7312f37a7 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAutoPinCodes", array(), "method")) {
            // line 8
            echo "  <div class=\"pin-codes-actions\">
    ";
            // line 9
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getPinCodesEnabled", array(), "method")) {
                // line 10
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\PINCodes\\View\\AddPinCodesButton"))), "html", null, true);
                echo "
      ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\FileSelector", "label" => "Import from CSV file", "object" => "import_pin_codes", "objectId" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getId", array(), "method"), "fileObject" => ""))), "html", null, true);
                echo "
    ";
            }
            // line 13
            echo "  </div>
  <div class=\"clear\"></div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  34 => 11,  29 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Pin codes actions box*/
/*  #*/
/*  # @ListChild (list="product.pinCodes", weight="400")*/
/*  #}*/
/* */
/* {% if not this.product.getAutoPinCodes() %}*/
/*   <div class="pin-codes-actions">*/
/*     {% if this.product.getPinCodesEnabled() %}*/
/*       {{ widget('\\XLite\\Module\\CDev\\PINCodes\\View\\AddPinCodesButton') }}*/
/*       {{ widget('\\XLite\\View\\Button\\FileSelector', label='Import from CSV file', object='import_pin_codes', objectId=this.product.getId(), fileObject='') }}*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="clear"></div>*/
/* {% endif %}*/
/* */
