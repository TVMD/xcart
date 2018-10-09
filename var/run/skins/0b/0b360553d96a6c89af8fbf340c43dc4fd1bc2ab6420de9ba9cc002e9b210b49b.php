<?php

/* /var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/login.twig */
class __TwigTemplate_433a0ca395231c6baeb4fba281ab619a9b4134101c5005a285e019af3c644a84 extends \XLite\Core\Templating\Twig\Template
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
<div class='login'>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLogin", array(), "method"), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/operate_as_user/parts/login.twig";
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
/*  # Login*/
/*  #*/
/*  # @ListChild (list="operate_as_user", weight="30")*/
/*  #}*/
/* */
/* <div class='login'>{{ this.getLogin() }}</div>*/
/* */
