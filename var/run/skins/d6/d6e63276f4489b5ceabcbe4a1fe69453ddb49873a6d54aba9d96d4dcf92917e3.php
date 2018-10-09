<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.hide.twig */
class __TwigTemplate_d279bafecdd274026f4d716f9121e7da0da5a1cb3065cca2b65a4de0d0534f08 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Simple", "label" => "", "style" => "themetweaker-tab themetweaker-tab_hide themetweaker-close-icon", "attributes" => array("@click" => "hidePanel")))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.hide.twig";
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
/*  # @ListChild(list="themetweaker-panel--tabs", weight="0")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Simple',*/
/*   label="",*/
/*   style="themetweaker-tab themetweaker-tab_hide themetweaker-close-icon",*/
/*   attributes={"@click": "hidePanel"}) }}*/
