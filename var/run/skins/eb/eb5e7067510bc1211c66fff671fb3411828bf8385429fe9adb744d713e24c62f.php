<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.city.twig */
class __TwigTemplate_0808f5563cbb2f65a2e9528f36fef60a221228cf8bca1f3ccde642e2b2f16c2a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCityMasksEditEnabled", array(), "method")) {
            // line 8
            echo "  <div class=\"table-label zone-cities-label\">
    <label>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("City masks")), "html", null, true);
            echo "</label>
  </div>

  <div class=\"zone-cities-help\">
    <label>";
            // line 13
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zone city masks help"));
            echo "</label>
  </div>

  ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Textarea\\Simple", "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "zone", array()), "getZoneCities", array(0 => 1), "method"), "fieldOnly" => true, "rows" => "5", "cols" => "70", "fieldName" => "zone_cities"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.city.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  34 => 13,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Zone: city masks template*/
/*  #*/
/*  # @ListChild (list="zones.zone.details", weight="300")*/
/*  #}*/
/* */
/* {% if this.isCityMasksEditEnabled() %}*/
/*   <div class="table-label zone-cities-label">*/
/*     <label>{{ t('City masks') }}</label>*/
/*   </div>*/
/* */
/*   <div class="zone-cities-help">*/
/*     <label>{{ t('Zone city masks help')|raw }}</label>*/
/*   </div>*/
/* */
/*   {{ widget('\\XLite\\View\\FormField\\Textarea\\Simple', value=this.zone.getZoneCities(1), fieldOnly=true, rows='5', cols='70', fieldName='zone_cities') }}*/
/* {% endif %}*/
/* */
