<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/completed.buttons.new_import.twig */
class __TwigTemplate_3852a0072c7d07ab11621f9008e40aa91e3bf167d0f70ab7e56c671d10652eb1 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImportTarget", array(), "method"))), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("New import")), "style" => "main-button"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/completed.buttons.new_import.twig";
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
/*  # @ListChild (list="import.completed.buttons", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Link', location=url(this.getImportTarget()), label=t('New import'), style='main-button') }}*/
/* */
