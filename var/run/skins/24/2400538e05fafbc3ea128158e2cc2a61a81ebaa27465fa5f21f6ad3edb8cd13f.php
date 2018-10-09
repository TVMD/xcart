<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/begin.buttons.import.twig */
class __TwigTemplate_d7d8cc473349400100b624030e3c762f37aa2e96e4af57993a8d8152a9a44f33 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\ProgressState", "jsCode" => "this.form.submit();", "style" => "main-button regular-main-button submit disabled", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Start Import"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/begin.buttons.import.twig";
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
/*  # Import completed section : button*/
/*  #*/
/*  # @ListChild (list="import.begin.buttons", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\ProgressState', jsCode='this.form.submit();', style='main-button regular-main-button submit disabled', label=t('Start Import')) }}*/
/* */
