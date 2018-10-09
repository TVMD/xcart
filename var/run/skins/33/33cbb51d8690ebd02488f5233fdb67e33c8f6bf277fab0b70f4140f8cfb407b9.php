<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/failed.buttons.export.twig */
class __TwigTemplate_12d8123091d4b6f749ec38f8c987bf7631cfd47854d1fa26053f254679ae696c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "export")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("New Export")), "style" => "main-button"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/failed.buttons.export.twig";
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
/*  # Export failed section : button*/
/*  #*/
/*  # @ListChild (list="export.failed.buttons", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Link', location=url('export'), label=t('New Export'), style='main-button') }}*/
/* */
