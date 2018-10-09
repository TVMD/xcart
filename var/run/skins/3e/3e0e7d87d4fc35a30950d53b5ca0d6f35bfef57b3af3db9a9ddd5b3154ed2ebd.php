<?php

/* /var/www/next/output/xcart/src/skins/customer/recover_password/parts/form.email.twig */
class __TwigTemplate_c73d185b0d153a6bfb8734eab41f476d0a945fcdbcf9d9b0506e55571a5dcfd8 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"email-label\"><label for=\"email\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "html", null, true);
        echo "</label></td>
  <td class=\"star\"></td>
  <td class=\"email-field field\">
    ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "email", array()), "required" => "true", "fieldName" => "email", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "true"))), "html", null, true);
        echo "
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/recover_password/parts/form.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Recover password : form : email*/
/*  #*/
/*  # @ListChild (list="recover.password.fields", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="email-label"><label for="email">{{ t('Email') }}</label></td>*/
/*   <td class="star"></td>*/
/*   <td class="email-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', value=this.email, required='true', fieldName='email', label=t('Email'), fieldOnly='true') }}*/
/*   </td>*/
/* </tr>*/
/* */
