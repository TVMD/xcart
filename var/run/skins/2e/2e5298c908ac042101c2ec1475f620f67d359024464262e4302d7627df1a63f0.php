<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.twig */
class __TwigTemplate_8330074a498fb238650382ca4d4cccda95d7dc52489f87592b90d8bcfe81f969 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"themetweaker-panel--tabs-wrapper\">
    <div class=\"themetweaker-panel--tabs\" data-panel-tabs>
        ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "themetweaker-panel--tabs"))), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/tabs.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel--header", weight="100")*/
/*  #}*/
/* */
/* <div class="themetweaker-panel--tabs-wrapper">*/
/*     <div class="themetweaker-panel--tabs" data-panel-tabs>*/
/*         {{ widget_list('themetweaker-panel--tabs') }}*/
/*     </div>*/
/* </div>*/
