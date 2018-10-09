<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/help_message.twig */
class __TwigTemplate_850c379dffac4cdc0c9b44f7cbb140a9bc542218130fbdced80a66f7e3612aee extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isNotOptimalTarget", array(), "method")) {
            // line 8
            echo "<div class='layout-editor-help-message'>
\t<i class=\"fa fa-info-circle\"></i> ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Open home or category pages for more opportunities to adjust the website structure"));
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/layout_editor/panel_parts/help_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor show hidden blocks button*/
/*  #*/
/*  # @ListChild (list="layout_editor", weight="100")*/
/*  #}*/
/* */
/* {% if this.isNotOptimalTarget() %}*/
/* <div class='layout-editor-help-message'>*/
/* 	<i class="fa fa-info-circle"></i> {{ t('Open home or category pages for more opportunities to adjust the website structure')|raw }}*/
/* </div>*/
/* {% endif %}*/
