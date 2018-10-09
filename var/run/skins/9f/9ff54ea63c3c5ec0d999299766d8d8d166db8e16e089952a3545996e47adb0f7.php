<?php

/* jscontainer/body.twig */
class __TwigTemplate_9e8422773c3b5e841d71c8447779c724f9e1a63970af5e877fdf2d71e2b907cf extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "jscontainer.js"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "jscontainer/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # JS container widget*/
/*  #}*/
/* */
/* {{ widget_list('jscontainer.js') }}*/
/* */
