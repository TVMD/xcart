<?php

/* /var/www/next/output/xcart/src/skins/customer/signin/signin_anonymous_box.twig */
class __TwigTemplate_d25f5cfa1312a0022802e02550dbb2309964f7ba7d2eceb5b6e676e21d66f4f1 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "checkout", "update_profile", array("email" => "", "same_address" => "1"))), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Continue"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/signin/signin_anonymous_box.twig";
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
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title", weight="200")*/
/*  #}*/
/* {{ widget('\\XLite\\View\\Button\\Link', location=url('checkout', 'update_profile', {'email': '', 'same_address': '1'}), label=t('Continue')) }}*/
/* */
