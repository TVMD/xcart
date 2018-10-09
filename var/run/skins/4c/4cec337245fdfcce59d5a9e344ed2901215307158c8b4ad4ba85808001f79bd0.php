<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.logged.account.twig */
class __TwigTemplate_b1e0add22feb097165fce81d6817a4273510eb0b9030a9c7420ba999e4bb666c extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-2\">
  <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order_list", "")), "html", null, true);
        echo "\" class=\"register\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("My account")), "html", null, true);
        echo "</a>
  <span class=\"email\">(";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "auth", array()), "profile", array()), "login", array()), "html", null, true);
        echo ")</span>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.logged.account.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Account link*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.logged", weight="200")*/
/*  #}*/
/* */
/* <li class="account-link-2">*/
/*   <a href="{{ url('order_list', '') }}" class="register">{{ t('My account') }}</a>*/
/*   <span class="email">({{ this.auth.profile.login }})</span>*/
/* </li>*/
/* */
