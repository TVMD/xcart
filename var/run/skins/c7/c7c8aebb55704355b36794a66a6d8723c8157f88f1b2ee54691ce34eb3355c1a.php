<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/login/signin/signin.checkout.paypal.twig */
class __TwigTemplate_fd3dac8c00597f560d939c7516afac172cbf78b332a1a0981b6d789ae577159c extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget", "placement" => "signin", "text_before" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Or use your social account"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Paypal/login/signin/signin.checkout.paypal.twig";
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
/*  # @ListChild (list="customer.checkout.signin", weight="100")*/
/*  #}*/
/* {{ widget('\\XLite\\Module\\CDev\\Paypal\\View\\Login\\Widget', placement='signin', text_before=t('Or use your social account')) }}*/
/* */
