<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/authorization/parts/field.name.twig */
class __TwigTemplate_a87644ada99af2a7aaf184ba8d7bc6c76829557f3b3553478ab68777030b0809 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<tr>
  <td class=\"email-field field\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "login", array()), "required" => "true", "fieldName" => "login", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "false", "fieldId" => "login-email"))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/authorization/parts/field.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # Field : username*/
/*  #*/
/*  # @ListChild (list="customer.signin.fields", weight="100")*/
/*  # @ListChild (list="customer.signin.popup.fields", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="email-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', value=this.login, required='true', fieldName='login', label=t('Email'), fieldOnly='false', fieldId='login-email') }}*/
/*   </td>*/
/* </tr>*/
/* */
