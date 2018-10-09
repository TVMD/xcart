<?php

/* /var/www/next/output/xcart/src/skins/customer/authorization/parts/field.name.twig */
class __TwigTemplate_0538732e1c902f798a6eaefa76103fc8aa21383da361500f243b4169a6605a34 extends \XLite\Core\Templating\Twig\Template
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
  <td class=\"email-label\"><label for=\"login-email\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "html", null, true);
        echo ":</label></td>
  <td class=\"email-field field\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "login", array()), "required" => "true", "fieldName" => "login", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "true", "fieldId" => "login-email"))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/authorization/parts/field.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 11,  23 => 9,  19 => 7,);
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
/*   <td class="email-label"><label for="login-email">{{ t('Email') }}:</label></td>*/
/*   <td class="email-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', value=this.login, required='true', fieldName='login', label=t('Email'), fieldOnly='true', fieldId='login-email') }}*/
/*   </td>*/
/* </tr>*/
/* */
