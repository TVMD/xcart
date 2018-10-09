<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.labels_editor.twig */
class __TwigTemplate_41b340ebab3589a7e6fea85fda99fdb9edfaf12ef8c95caaa3fdd092c7335887 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab", "svg" => "modules/XC/ThemeTweaker/themetweaker_panel/icons/labels.svg", "label" => "Labels editor", "style" => ("themetweaker-tab themetweaker-tab_labels_editor " . $this->getAttribute(        // line 10
(isset($context["this"]) ? $context["this"] : null), "getTabClass", array(0 => "labels_editor"), "method")), "disabled" =>  !$this->getAttribute(        // line 11
(isset($context["this"]) ? $context["this"] : null), "isTabAvailable", array(0 => "labels_editor"), "method"), "disabledTooltip" => $this->getAttribute(        // line 12
(isset($context["this"]) ? $context["this"] : null), "getTabDisabledTooltip", array(0 => "labels_editor"), "method"), "attributes" => $this->getAttribute(        // line 13
(isset($context["this"]) ? $context["this"] : null), "getTabAttributes", array(0 => "labels_editor"), "method")))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.labels_editor.twig";
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
/*  # @ListChild(list="themetweaker-panel--tabs", weight="40")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab',*/
/*           svg='modules/XC/ThemeTweaker/themetweaker_panel/icons/labels.svg',*/
/*           label="Labels editor",*/
/*           style="themetweaker-tab themetweaker-tab_labels_editor " ~ this.getTabClass('labels_editor'),*/
/*           disabled=(not this.isTabAvailable('labels_editor')),*/
/*           disabledTooltip=this.getTabDisabledTooltip('labels_editor'),*/
/*           attributes=this.getTabAttributes('labels_editor')) }}*/
