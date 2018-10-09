<?php

/* footer/body.twig */
class __TwigTemplate_ebf4ab50410fc19918d02112bfc71d45b48b34606a21f0039927f30098df8bcb extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "footer"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "footer/body.twig";
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
/* # Page footer*/
/* #}*/
/* */
/* {{ widget_list('footer') }}*/
/* */
