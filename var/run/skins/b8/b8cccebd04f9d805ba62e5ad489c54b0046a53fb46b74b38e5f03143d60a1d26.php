<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.switcher.twig */
class __TwigTemplate_57dc6f5adacfce6b92286682759091c610453d9f0042d9950d68280e282cd2ec extends \XLite\Core\Templating\Twig\Template
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
<div class=\"themetweaker-action themetweaker-action_switcher\"
     v-show=\"mode\" data-toggle=\"tooltip\" data-placement=\"top\"
     data-html=\"true\" title=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("themetweaker.shortcut.switcher")), "html", null, true);
        echo "\"
     :class=\"switcherClasses\">
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => "{{{ switcherLabel }}}", "style" => "", "attributes" => array(":checked" => "switcher", "@change" => "onSwitchChange", "data-panel-switcher" => "data-panel-switcher")))), "html", null, true);
        // line 17
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.switcher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 17,  29 => 11,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel--actions", weight="100")*/
/*  #}*/
/* */
/* <div class="themetweaker-action themetweaker-action_switcher"*/
/*      v-show="mode" data-toggle="tooltip" data-placement="top"*/
/*      data-html="true" title="{{ t('themetweaker.shortcut.switcher') }}"*/
/*      :class="switcherClasses">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Checkbox\\OnOff',*/
/*       label="{{{ switcherLabel }}}",*/
/*       style="",*/
/*       attributes={*/
/*         ":checked": "switcher",*/
/*         '@change': 'onSwitchChange',*/
/*         'data-panel-switcher': 'data-panel-switcher'}) }}*/
/* </div>*/
