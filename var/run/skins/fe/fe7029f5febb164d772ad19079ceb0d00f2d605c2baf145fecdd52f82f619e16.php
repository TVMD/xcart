<?php

/* /var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/finish-button.twig */
class __TwigTemplate_bc155967d88d351512c1e086d5411513ae07705e47245f66d6bd441a8c880f4e extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFinishOperateAsUrl", array(), "method"), "style" => "finish-button btn-sm", "label" => "Quit", "disabled" => "false"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/finish-button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Finish button*/
/*  #*/
/*  # @ListChild (list="operate_as_user", weight="40")*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Button\\Link', location=this.getFinishOperateAsUrl(), style='finish-button btn-sm', label='Quit', disabled='false') }}*/
