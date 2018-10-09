<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/hidden_count.twig */
class __TwigTemplate_4cc1e9ba594627d2848184c380985a063d45649edb3d1e3dd0a25a3855e37bb9 extends \XLite\Core\Templating\Twig\Template
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
<div class='layout-editor-hidden-blocks'>
\t<span class='layout-editor-hidden-blocks_icon'><i class=\"fa fa-eye-slash\"></i></span>
\t<span class='layout-editor-hidden-blocks-counter' v-text=\"hiddenCount\"></span>
\t<span class='layout-editor-hidden-blocks_label'>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("disabled blocks")), "html", null, true);
        echo "</span>
\t<span class='layout-editor-hidden-blocks_message' v-if=\"!hiddenCount\">";
        // line 11
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("You are now in layout editing mode"));
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/hidden_count.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor show hidden blocks button*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="10")*/
/*  #}*/
/* */
/* <div class='layout-editor-hidden-blocks'>*/
/* 	<span class='layout-editor-hidden-blocks_icon'><i class="fa fa-eye-slash"></i></span>*/
/* 	<span class='layout-editor-hidden-blocks-counter' v-text="hiddenCount"></span>*/
/* 	<span class='layout-editor-hidden-blocks_label'>{{ t('disabled blocks') }}</span>*/
/* 	<span class='layout-editor-hidden-blocks_message' v-if="!hiddenCount">{{ t('You are now in layout editing mode')|raw }}</span>*/
/* </div>*/
/* */
