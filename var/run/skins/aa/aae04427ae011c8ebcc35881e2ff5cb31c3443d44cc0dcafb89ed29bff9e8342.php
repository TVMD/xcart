<?php

/* /var/www/next/output/xcart/src/skins/customer/signin/signin_title.twig */
class __TwigTemplate_2a0a4394ba657701e049be6d746b12c868516db139646e3a724bb7dc63fb5650 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"signin-anonymous-title-description\">";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSigninAnonymousTitle", array(), "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/signin/signin_title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Sign-in*/
/*  #*/
/*  # @ListChild (list="signin-anonymous-title", weight="20")*/
/*  #}*/
/* <div class="signin-anonymous-title-description">{{ this.getSigninAnonymousTitle()|raw }}</div>*/
/* */
