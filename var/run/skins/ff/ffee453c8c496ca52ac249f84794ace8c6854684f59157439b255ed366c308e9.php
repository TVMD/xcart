<?php

/* /var/www/next/output/xcart/src/skins/customer/signin/parts_login_form/email.twig */
class __TwigTemplate_fdaf59389ca784195fb6e45dfbcaaf05e5e7b729be4a972244911cb08ce69891 extends \XLite\Core\Templating\Twig\Template
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
        echo "<tr><td class=\"email-field\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "login", array()), "required" => "true", "fieldName" => "login", "placeholder" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "true", "fieldId" => "login-email"))), "html", null, true);
        echo "
</td></tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/signin/parts_login_form/email.twig";
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
/*  # @ListChild (list="checkout.signin.form", weight="10")*/
/*  #}*/
/* <tr><td class="email-field">*/
/*   {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', value=this.login, required='true', fieldName='login', placeholder=t('Email'), label=t('Email'), fieldOnly='true', fieldId='login-email') }}*/
/* </td></tr>*/
/* */
