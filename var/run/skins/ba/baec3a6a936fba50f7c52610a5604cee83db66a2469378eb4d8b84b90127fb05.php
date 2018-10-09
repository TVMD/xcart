<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/signin/parts/continue.email.twig */
class __TwigTemplate_aed5463e968e8713d830fd86ef6e18e2e9e287e8d996c444ca36a157f1cad3e9 extends \XLite\Core\Templating\Twig\Template
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
  <td class=\"email-field field\">
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Text\\Email", "required" => "true", "fieldName" => "email", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Email")), "fieldOnly" => "false"))), "html", null, true);
        echo "
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/signin/parts/continue.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Field : email*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title.continue", weight="100")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="email-field field">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Text\\Email', required='true', fieldName='email', label=t('Email'), fieldOnly='false') }}*/
/*   </td>*/
/* </tr>*/
