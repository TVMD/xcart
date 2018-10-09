<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/login/signin/layout.header.bar.links.newby.twig */
class __TwigTemplate_b84af89672a307a1e2fab581d58ee8efab032ff2a321de0760d654634fc2e190 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"social-login amazon-login\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget", "buttonStyle" => "icon", "placement" => "signin"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/Amazon/PayWithAmazon/login/signin/layout.header.bar.links.newby.twig";
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
/*  # Sign in: SocialLogin widget*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.newby", zone="customer", weight="101")*/
/*  #}*/
/* <li class="social-login amazon-login">*/
/*   {{ widget('XLite\\Module\\Amazon\\PayWithAmazon\\View\\Login\\Widget', buttonStyle='icon', placement='signin') }}*/
/* </li>*/
/* */
