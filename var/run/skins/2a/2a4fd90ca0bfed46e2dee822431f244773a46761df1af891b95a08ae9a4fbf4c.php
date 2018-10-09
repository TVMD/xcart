<?php

/* /var/www/next/output/xcart/src/skins/customer/signin/parts_login_form/password.twig */
class __TwigTemplate_9416e886fc88dfc175c873bc5af276085c1b1ebf802a8e5f5cb8af72d57a8337 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr><td class=\"password-field\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Password", "required" => "true", "fieldName" => "password", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Password")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Password")), "fieldOnly" => "true", "fieldId" => "login-password"))), "html", null, true);
        echo "
</td></tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/signin/parts_login_form/password.twig";
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
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="checkout.signin.form", weight="20")*/
/*  #}*/
/* <tr><td class="password-field">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Password', required='true', fieldName='password', placeholder=t('Password'), label=t('Password'), fieldOnly='true', fieldId='login-password') }}*/
/* </td></tr>*/
/* */
