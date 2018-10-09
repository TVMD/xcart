<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.webmaster.twig */
class __TwigTemplate_bab5e0f6ba662e1d244bc51eb5c507769168700cb268338103b695e02c8f3c81 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab", "svg" => "modules/XC/ThemeTweaker/themetweaker_panel/icons/webmaster.svg", "label" => "Template editor", "style" => ("themetweaker-tab themetweaker-tab_webmaster " . $this->getAttribute(        // line 10
(isset($context["this"]) ? $context["this"] : null), "getTabClass", array(0 => "webmaster"), "method")), "disabled" =>  !$this->getAttribute(        // line 11
(isset($context["this"]) ? $context["this"] : null), "isTabAvailable", array(0 => "webmaster"), "method"), "disabledTooltip" => $this->getAttribute(        // line 12
(isset($context["this"]) ? $context["this"] : null), "getTabDisabledTooltip", array(0 => "webmaster"), "method"), "attributes" => $this->getAttribute(        // line 13
(isset($context["this"]) ? $context["this"] : null), "getTabAttributes", array(0 => "webmaster"), "method")))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.webmaster.twig";
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
/*  # @ListChild(list="themetweaker-panel--tabs", weight="10")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab',*/
/*           svg='modules/XC/ThemeTweaker/themetweaker_panel/icons/webmaster.svg',*/
/*           label="Template editor",*/
/*           style="themetweaker-tab themetweaker-tab_webmaster " ~ this.getTabClass('webmaster'),*/
/*           disabled=(not this.isTabAvailable('webmaster')),*/
/*           disabledTooltip=this.getTabDisabledTooltip('webmaster'),*/
/*           attributes=this.getTabAttributes('webmaster')) }}*/
