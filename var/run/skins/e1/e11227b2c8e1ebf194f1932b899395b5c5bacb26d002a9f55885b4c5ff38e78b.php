<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.logout.twig */
class __TwigTemplate_b452e37ef46c56f7b6d558c23bee8e190b4f8e5c17a2282df6c8626bf3a084d6 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"separator\"><hr /></li>
<li class=\"account-link-logoff\">
\t<a href=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "login", "logoff")), "html", null, true);
        echo "\" class=\"log-off icon-logout\">
\t\t<span>";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Log out")), "html", null, true);
        echo "</span>
\t</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.logout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Log out link*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.logged", weight="500")*/
/*  #}*/
/* */
/* <li class="separator"><hr /></li>*/
/* <li class="account-link-logoff">*/
/* 	<a href="{{ url('login', 'logoff') }}" class="log-off icon-logout">*/
/* 		<span>{{ t('Log out') }}</span>*/
/* 	</a>*/
/* </li>*/
/* */
