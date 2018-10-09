<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Onboarding/wizard/close_button.twig */
class __TwigTemplate_62ecd1b4f8a0e88cebfab76df9343868e929fbbc0a26375f114049a0f24976db extends \XLite\Core\Templating\Twig\Template
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
<div class=\"close-button\" @click=\"hideWizard\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Close wizard")), "html", null, true);
        echo "\"></div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Onboarding/wizard/close_button.twig";
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
/*  # @ListChild(list="onboarding-wizard.header", weight="50")*/
/*  #}*/
/* */
/* <div class="close-button" @click="hideWizard" data-toggle="tooltip" data-placement="left" title="{{ t('Close wizard') }}"></div>*/
