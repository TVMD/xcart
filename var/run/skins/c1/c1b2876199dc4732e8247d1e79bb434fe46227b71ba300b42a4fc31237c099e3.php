<?php

/* /var/www/next/output/xcart/src/skins/customer/recover_password/parts/note.twig */
class __TwigTemplate_e97c269a87738dcd49cc4aa0df7f5e140d72e95dd298908f66e909bf3c3bcde8 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"recover-password-message\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("To recover your password, please type in the valid e-mail address you use as a login")), "html", null, true);
        echo "</div>
<div class=\"recover-password-message\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The confirmation URL link will be emailed to you shortly")), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/recover_password/parts/note.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Recover password : note*/
/*  #*/
/*  # @ListChild (list="recover.password", weight="100")*/
/*  #}*/
/* */
/* <div class="recover-password-message">{{ t('To recover your password, please type in the valid e-mail address you use as a login') }}</div>*/
/* <div class="recover-password-message">{{ t('The confirmation URL link will be emailed to you shortly') }}</div>*/
/* */
