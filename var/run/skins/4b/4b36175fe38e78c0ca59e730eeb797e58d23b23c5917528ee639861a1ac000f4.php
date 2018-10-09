<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.newby.register.twig */
class __TwigTemplate_be9ec3e4d608356a88c8f61e8e2b2d061c7757530e3702972d146dbcf1529ceb extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-2 last\">
  <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "profile", "", array("mode" => "register"))), "html", null, true);
        echo "\" class=\"register\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Register")), "html", null, true);
        echo "</a>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.newby.register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Register*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.newby", weight="200")*/
/*  #}*/
/* */
/* <li class="account-link-2 last">*/
/*   <a href="{{ url('profile', '', {'mode': 'register'}) }}" class="register">{{ t('Register') }}</a>*/
/* </li>*/
/* */
