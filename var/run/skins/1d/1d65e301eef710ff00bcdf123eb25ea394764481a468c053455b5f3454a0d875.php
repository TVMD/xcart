<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/begin.buttons.export.twig */
class __TwigTemplate_8887d9aab1d34a56d19e0e2f4f80c4b7ec930c52a2b4a2ce2b6f3e8766289fc0 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"export-button-container\">
\t";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\StartExport"))), "html", null, true);
        echo "
\t";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isExportLocked", array(), "method")) {
            // line 10
            echo "\t\t<p class=\"export-blocked\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Background export is in progress")), "html", null, true);
            echo "</p>
\t";
        }
        // line 12
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/begin.buttons.export.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Export completed section : button*/
/*  #*/
/*  # @ListChild (list="export.begin.buttons", weight="100")*/
/*  #}*/
/* */
/* <div class="export-button-container">*/
/* 	{{ widget('XLite\\View\\Button\\StartExport') }}*/
/* 	{% if this.isExportLocked() %}*/
/* 		<p class="export-blocked">{{ t('Background export is in progress') }}</p>*/
/* 	{% endif %}*/
/* </div>*/
/* */
