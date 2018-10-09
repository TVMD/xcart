<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/main.address.twig */
class __TwigTemplate_526afb27d027ae8b236f71cdcdc0b2897fc983539558f846d7bbc216519d05a1 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("XLite\\Module\\XC\\Geolocation\\View\\Form\\LocationSelect", array("className" => "location"));        // line 7
        echo "
  <ul class=\"form\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "location-select.address"))), "html", null, true);
        echo "
  </ul>

  <div class=\"buttons main\">
    ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Submit", "label" => "Save location"))), "html", null, true);
        echo "
  </div>

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Geolocation/location_popup/parts/main.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 13,  24 => 9,  20 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Location select : address*/
/*  #*/
/*  # @ListChild (list="location-select.main", weight="10")*/
/*  #}*/
/* {% form 'XLite\\Module\\XC\\Geolocation\\View\\Form\\LocationSelect' with {className: 'location'} %}*/
/* */
/*   <ul class="form">*/
/*     {{ widget_list('location-select.address') }}*/
/*   </ul>*/
/* */
/*   <div class="buttons main">*/
/*     {{ widget('XLite\\View\\Button\\Submit', label='Save location') }}*/
/*   </div>*/
/* */
/* {% endform %}*/
/* */
