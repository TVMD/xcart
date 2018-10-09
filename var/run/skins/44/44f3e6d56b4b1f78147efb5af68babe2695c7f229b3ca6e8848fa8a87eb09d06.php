<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.custom_css.twig */
class __TwigTemplate_bdaaf15d7aefc882361fac51dfbe472f8f005fcf77c055344fed991e7fa92dd1 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab", "svg" => "modules/XC/ThemeTweaker/themetweaker_panel/icons/code.svg", "label" => "Custom CSS", "style" => ("themetweaker-tab themetweaker-tab_custom_css " . $this->getAttribute(        // line 10
(isset($context["this"]) ? $context["this"] : null), "getTabClass", array(0 => "custom_css"), "method")), "disabled" =>  !$this->getAttribute(        // line 11
(isset($context["this"]) ? $context["this"] : null), "isTabAvailable", array(0 => "custom_css"), "method"), "disabledTooltip" => $this->getAttribute(        // line 12
(isset($context["this"]) ? $context["this"] : null), "getTabDisabledTooltip", array(0 => "custom_css"), "method"), "attributes" => $this->getAttribute(        // line 13
(isset($context["this"]) ? $context["this"] : null), "getTabAttributes", array(0 => "custom_css"), "method")))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.custom_css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 13,  25 => 12,  24 => 11,  23 => 10,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel--tabs", weight="20")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab',*/
/*     svg='modules/XC/ThemeTweaker/themetweaker_panel/icons/code.svg',*/
/*     label="Custom CSS",*/
/*     style="themetweaker-tab themetweaker-tab_custom_css " ~ this.getTabClass('custom_css'),*/
/*     disabled=(not this.isTabAvailable('custom_css')),*/
/*     disabledTooltip=this.getTabDisabledTooltip('custom_css'),*/
/*     attributes=this.getTabAttributes('custom_css')) }}*/
