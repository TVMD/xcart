<?php

/* /var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.newby.login.twig */
class __TwigTemplate_9949d176d46befdadb006c7780f2daa74026001e8751c8e097dee5f08702875d extends \XLite\Core\Templating\Twig\Template
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
<li class=\"account-link-1 first\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\LoginLink"))), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/layout/header/header.bar.links.newby.login.twig";
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
/*  # Log in*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.newby", weight="100")*/
/*  #}*/
/* */
/* <li class="account-link-1 first">{{ widget('XLite\\View\\LoginLink') }}</li>*/
/* */
