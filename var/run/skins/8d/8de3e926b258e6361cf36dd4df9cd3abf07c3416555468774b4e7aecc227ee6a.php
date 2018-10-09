<?php

/* header/body.twig */
class __TwigTemplate_48f949b333e09c4d41a58447436e4420ac719e7a7a7d8a5e7a708b86facabf3f extends \XLite\Core\Templating\Twig\Template
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
<head>
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "head"))), "html", null, true);
        echo "
</head>
";
    }

    public function getTemplateName()
    {
        return "header/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # Page head*/
/*  #}*/
/* */
/* <head>*/
/*   {{ widget_list('head') }}*/
/* </head>*/
/* */
