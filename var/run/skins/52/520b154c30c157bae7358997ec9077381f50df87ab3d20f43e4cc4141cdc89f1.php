<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.logged.logout.twig */
class __TwigTemplate_3d56fe081f5803d812ed266949f69081f309792f4686a954387a32c682ff1732 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-1 last\"><a href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "login", "logoff")), "html", null, true);
        echo "\" class=\"log-in\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Log out")), "html", null, true);
        echo "</a></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.logged.logout.twig";
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
/*  # Log out link*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.logged", weight="300")*/
/*  #}*/
/* */
/* <li class="account-link-1 last"><a href="{{ url('login', 'logoff') }}" class="log-in">{{ t('Log out') }}</a></li>*/
/* */
