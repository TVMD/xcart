<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.zipcode.twig */
class __TwigTemplate_d742081bd488f13e6d2b84010e1f63831895c04d97d5f6214b20928307f813b8 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"table-label zone-zipcodes-label\">
  <label>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zip/postal code masks")), "html", null, true);
        echo "</label>
</div>

<div class=\"zone-zipcodes-help\">
  <label>";
        // line 12
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zone zipcode masks help"));
        echo "</label>
</div>

";
        // line 15
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "zone", array()), "getZoneZipCodes", array(0 => 1), "method"), "fieldOnly" => true, "rows" => "5", "cols" => "70", "fieldName" => "zone_zipcodes"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.zipcode.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 15,  30 => 12,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Zone: zip codes masks template*/
/*  #*/
/*  # @ListChild (list="zones.zone.details", weight="400")*/
/*  #}*/
/* */
/* <div class="table-label zone-zipcodes-label">*/
/*   <label>{{ t('Zip/postal code masks') }}</label>*/
/* </div>*/
/* */
/* <div class="zone-zipcodes-help">*/
/*   <label>{{ t('Zone zipcode masks help')|raw }}</label>*/
/* </div>*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', value=this.zone.getZoneZipCodes(1), fieldOnly=true, rows='5', cols='70', fieldName='zone_zipcodes') }}*/
/* */
