<?php

/* /var/www/next/output/xcart/src/skins/customer/recover_password/parts/form.button.twig */
class __TwigTemplate_84b73ecfb79cb67e26e252ad6be6f16b7c861e6dafc19cff374b0d121c78dd5d extends \XLite\Core\Templating\Twig\Template
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
  <td colspan=\"2\">&nbsp;</td>
  <td class=\"buttons\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("submit_restore_pass"))))), "html", null, true);
        echo "
    <a href=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "login")), "html", null, true);
        echo "\" class=\"back-login log-in\" data-login=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Back to Login form")), "html", null, true);
        echo "</a>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/recover_password/parts/form.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Recover password : form : button*/
/*  #*/
/*  # @ListChild (list="recover.password.fields", weight="300")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td colspan="2">&nbsp;</td>*/
/*   <td class="buttons">*/
/*     {{ widget('\\XLite\\View\\Button\\Submit', label=t('submit_restore_pass')) }}*/
/*     <a href="{{ url('login') }}" class="back-login log-in" data-login="{{ this.email }}">{{ t('Back to Login form') }}</a>*/
/*   </td>*/
/* </tr>*/
/* */
/* */
