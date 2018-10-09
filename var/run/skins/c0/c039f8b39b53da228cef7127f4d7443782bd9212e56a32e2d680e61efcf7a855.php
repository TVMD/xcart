<?php

/* /var/www/next/output/xcart/src/skins/admin/address/text/parts/field.twig */
class __TwigTemplate_45c59d85c0662ba4cd6d561af805e16cf5303d89836226a476703cf0cd8c8883 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"address-text\">

  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "before", "type" => "nested", "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldName", array()), "fieldData" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldData", array())))), "html", null, true);
        echo "

  <li class=\"address-text-label-";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldName", array()), "html", null, true);
        echo "\">
    ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldData", array()), "label", array()), "html", null, true);
        echo ":
  </li>

  ";
        // line 15
        $context["fieldValue"] = $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldValue", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldName", array()), 1 => 1), "method");
        // line 16
        echo "
  <li class=\"address-text-value\">
    ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["fieldValue"]) ? $context["fieldValue"] : null), "html", null, true);
        echo "
  </li>

  ";
        // line 21
        if ((isset($context["fieldValue"]) ? $context["fieldValue"] : null)) {
            // line 22
            echo "    <li class=\"address-text-comma-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldName", array()), "html", null, true);
            echo "\">,</li>
  ";
        }
        // line 24
        echo "
  ";
        // line 25
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "after", "type" => "nested", "fieldName" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldName", array()), "fieldData" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldData", array())))), "html", null, true);
        echo "

</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/address/text/parts/field.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 25,  59 => 24,  53 => 22,  51 => 21,  45 => 18,  41 => 16,  39 => 15,  33 => 12,  29 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Address*/
/*  #*/
/*  # @ListChild (list="address.text.main", weight="100")*/
/*  #}*/
/* */
/* <ul class="address-text">*/
/* */
/*   {{ widget_list('before', type='nested', fieldName=this.fieldName, fieldData=this.fieldData) }}*/
/* */
/*   <li class="address-text-label-{{ this.fieldName }}">*/
/*     {{ this.fieldData.label }}:*/
/*   </li>*/
/* */
/*   {% set fieldValue = this.getFieldValue(this.fieldName, 1) %}*/
/* */
/*   <li class="address-text-value">*/
/*     {{ fieldValue }}*/
/*   </li>*/
/* */
/*   {% if fieldValue %}*/
/*     <li class="address-text-comma-{{ this.fieldName }}">,</li>*/
/*   {% endif %}*/
/* */
/*   {{ widget_list('after', type='nested', fieldName=this.fieldName, fieldData=this.fieldData) }}*/
/* */
/* </ul>*/
/* */
