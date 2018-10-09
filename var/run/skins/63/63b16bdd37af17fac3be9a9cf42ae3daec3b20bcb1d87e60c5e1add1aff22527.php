<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.inline_editor.twig */
class __TwigTemplate_4f43925e7b921aa67e20bb376877f02347b8fffcda785ce6a8094c4f6fe761bf extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab", "svg" => "modules/XC/ThemeTweaker/themetweaker_panel/icons/inline.svg", "label" => "Inline editor", "style" => ("themetweaker-tab themetweaker-tab_inline_editor " . $this->getAttribute(        // line 10
(isset($context["this"]) ? $context["this"] : null), "getTabClass", array(0 => "inline_editor"), "method")), "disabled" =>  !$this->getAttribute(        // line 11
(isset($context["this"]) ? $context["this"] : null), "isTabAvailable", array(0 => "inline_editor"), "method"), "disabledTooltip" => $this->getAttribute(        // line 12
(isset($context["this"]) ? $context["this"] : null), "getTabDisabledTooltip", array(0 => "inline_editor"), "method"), "attributes" => $this->getAttribute(        // line 13
(isset($context["this"]) ? $context["this"] : null), "getTabAttributes", array(0 => "inline_editor"), "method")))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.inline_editor.twig";
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
/*  # @ListChild(list="themetweaker-panel--tabs", weight="50")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ThemeTweakerTab',*/
/*   svg='modules/XC/ThemeTweaker/themetweaker_panel/icons/inline.svg',*/
/*   label="Inline editor",*/
/*   style="themetweaker-tab themetweaker-tab_inline_editor " ~ this.getTabClass('inline_editor'),*/
/*   disabled=(not this.isTabAvailable('inline_editor')),*/
/*   disabledTooltip=this.getTabDisabledTooltip('inline_editor'),*/
/*   attributes=this.getTabAttributes('inline_editor')) }}*/
