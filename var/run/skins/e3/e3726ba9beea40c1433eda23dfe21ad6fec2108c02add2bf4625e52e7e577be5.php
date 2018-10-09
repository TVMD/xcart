<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.account.twig */
class __TwigTemplate_209acc62b79e32777ce0a4303cf7db298163bcb49fa57fcbf953e1a5cd752ddb extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-profile\">
  <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "")), "html", null, true);
        echo "\" class=\"profile icon-my-account-profile\">
  \t<span>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Details")), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Account link*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.logged", weight="200")*/
/*  #}*/
/* */
/* <li class="account-link-profile">*/
/*   <a href="{{ url('profile', '') }}" class="profile icon-my-account-profile">*/
/*   	<span>{{ t('Details') }}</span>*/
/*   </a>*/
/* </li>*/
/* */
