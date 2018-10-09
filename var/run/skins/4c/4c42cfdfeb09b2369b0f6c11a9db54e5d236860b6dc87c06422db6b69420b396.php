<?php

/* /var/www/next/output/xcart/src/skins/customer/recover_password/parts/form.twig */
class __TwigTemplate_247044031c2168d0906f5c45203350266440545ecfe122996140f4ec9ef58b4c extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        $this->startForm("XLite\\View\\Form", array("formTarget" => "recover_password", "formAction" => "recover_password", "className" => "recovery-form use-inline-error"));        // line 8
        echo "
  <table class=\"recover-password-form\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "recover.password.fields"))), "html", null, true);
        echo "
  </table>

";
        $this->endForm();        // line 14
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/recover_password/parts/form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 14,  27 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Recover password : form*/
/*  #*/
/*  # @ListChild (list="recover.password", weight="200")*/
/*  #}*/
/* */
/* {% form 'XLite\\View\\Form' with {formTarget: 'recover_password', formAction: 'recover_password', className: 'recovery-form use-inline-error'} %}*/
/* */
/*   <table class="recover-password-form">*/
/*     {{ widget_list('recover.password.fields') }}*/
/*   </table>*/
/* */
/* {% endform %}*/
/* */
/* */
