<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/shortcut.twig */
class __TwigTemplate_2e0fe117d1e08e9423590557e7fa516ee1783dd4dfca521800258a98561b538d extends \XLite\Core\Templating\Twig\Template
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
<div class=\"themetweaker-panel-shortcut\" v-show=\"!isExpanded\" @click=\"showPanel\" tabindex=\"-1\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displaySVGImage", array(0 => "modules/XC/ThemeTweaker/themetweaker_panel/icons/settings.svg"), "method"), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/shortcut.twig";
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
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel-extensions", weight="100")*/
/*  #}*/
/* */
/* <div class="themetweaker-panel-shortcut" v-show="!isExpanded" @click="showPanel" tabindex="-1">*/
/*   {{ this.displaySVGImage('modules/XC/ThemeTweaker/themetweaker_panel/icons/settings.svg') }}*/
/* </div>*/
