<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.save.twig */
class __TwigTemplate_9bd18da724c3df07ccae5152a37381a017208e91ea4bc62a8c558ee339fff1f1 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Simple", "label" => "Save", "style" => "themetweaker-action themetweaker-action_save", "attributes" => array("@click" => "onSaveClick", "v-show" => "mode", "data-panel-save-button" => "data-panel-save-button", ":class" => "saveButtonClasses", ":disabled" => "isSaveDisabled", "data-toggle" => "tooltip", "data-placement" => "top", "data-html" => "true", "title" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("themetweaker.shortcut.save")))))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel--actions", weight="999")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Simple',*/
/*           label="Save",*/
/*           style="themetweaker-action themetweaker-action_save",*/
/*           attributes={*/
/*             "@click": "onSaveClick",*/
/*             "v-show": "mode",*/
/*             'data-panel-save-button': 'data-panel-save-button',*/
/*             ':class': 'saveButtonClasses',*/
/*             ':disabled': 'isSaveDisabled',*/
/*             'data-toggle': 'tooltip',*/
/*             'data-placement': 'top',*/
/*             'data-html': "true",*/
/*             'title': t('themetweaker.shortcut.save'),*/
/*           }) }}*/
