<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.twig */
class __TwigTemplate_adfb7bf4414023146ea40ff329565edf4187e5f3bcdeda3101075f2699bdcea1 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"themetweaker-panel--actions-wrapper\">
    <xlite-panel-actions inline-template :mode=\"mode\">
        <div class=\"themetweaker-panel--actions\" data-panel-actions>
            ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "themetweaker-panel--actions"))), "html", null, true);
        echo "
        </div>
    </xlite-panel-actions>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel/actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel--header", weight="200")*/
/*  #}*/
/* */
/* <div class="themetweaker-panel--actions-wrapper">*/
/*     <xlite-panel-actions inline-template :mode="mode">*/
/*         <div class="themetweaker-panel--actions" data-panel-actions>*/
/*             {{ widget_list('themetweaker-panel--actions') }}*/
/*         </div>*/
/*     </xlite-panel-actions>*/
/* </div>*/
