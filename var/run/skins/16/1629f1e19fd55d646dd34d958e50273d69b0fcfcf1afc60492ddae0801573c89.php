<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/completed.buttons.export.twig */
class __TwigTemplate_c465383fac8ddc7962a16c0468854a688877fd9906320ab4d6f12c5a9292c47c extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/completed.buttons.export.twig";
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
/*  # Export completed section : button*/
/*  #*/
/*  # @ListChild (list="export.completed.buttons", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Link', location=url('export'), label=t('New Export'), style='main-button') }}*/
/* */
