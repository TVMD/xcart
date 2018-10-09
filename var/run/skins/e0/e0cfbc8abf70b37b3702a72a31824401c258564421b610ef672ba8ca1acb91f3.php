<?php

/* /var/www/next/output/xcart/src/skins/admin/profile/add_user.twig */
class __TwigTemplate_799a209defdbd2e6bb5cc5eb424496889af71b16ddefbc69b4723b5e056c0bb2 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\AddUser", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add user")), "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "", array("mode" => "register")))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/profile/add_user.twig";
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
/*  # Add user button. Admin area.*/
/*  #*/
/*  # @ListChild (list="itemsList.profile.search.footer", weight="20")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Button\\AddUser', label=t('Add user'), location=url('profile', '', {'mode': 'register'})) }}*/
/* */
