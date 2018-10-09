<?php

/* /var/www/next/output/xcart/src/skins/admin/profile/delete_user.twig */
class __TwigTemplate_28784154e265e1b841eac22b5b80a8ce740920e5a0be77c87b0513d29b7c6d07 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\DeleteProfile", "name" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delete selected profile"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/profile/delete_user.twig";
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
/*  # Delete profile button. Admin area.*/
/*  #*/
/*  # @ListChild (list="itemsList.profile.search.footer", weight="10")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Button\\DeleteProfile', name=t('Delete'), label=t('Delete selected profile')) }}*/
/* */
