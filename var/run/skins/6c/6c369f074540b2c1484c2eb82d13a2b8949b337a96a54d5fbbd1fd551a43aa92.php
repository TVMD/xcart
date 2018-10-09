<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/login/signin/signin.paypal.twig */
class __TwigTemplate_2d7f0ef11a1fff74d9e1539ac24eb92d7c0c5ca4f88a96d211ea17014cf544df extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget", "placement" => "signin", "text_before" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Use existing PayPal account")), "text_after" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Or sign in the classic way"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/login/signin/signin.paypal.twig";
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
/*  # Sign in: SocialLogin widget*/
/*  #*/
/*  # @ListChild (list="customer.signin", weight="100")*/
/*  #}*/
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget', placement='signin', text_before=t('Use existing PayPal account'), text_after=t('Or sign in the classic way')) }}*/
/* */
