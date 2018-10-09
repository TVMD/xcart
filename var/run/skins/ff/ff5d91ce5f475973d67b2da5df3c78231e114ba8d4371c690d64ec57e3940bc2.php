<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/list_item_parts/action_unhide.twig */
class __TwigTemplate_adeffd8bc1d9efc799de70ff303afb588d5143ee2fc063f2d0d649a76fc9e5b4 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ListItemAction", 1 => array("tooltip" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Block is disabled")), "style" => "list-item-action__unhide", "event" => "layout.unhide", "icon-style" => "fa-eye-slash")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/list_item_parts/action_unhide.twig";
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
/*  # Show action button*/
/*  #*/
/*  # @ListChild (list="list-item.actions", weight="10")*/
/*  #}*/
/* */
/* {{ widget('XLite\\Module\\XC\\ThemeTweaker\\View\\Button\\ListItemAction', {tooltip: t('Block is disabled'), style: 'list-item-action__unhide', event: 'layout.unhide', 'icon-style': 'fa-eye-slash'}) }}*/
/* */
