<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.email.twig */
class __TwigTemplate_08e8f7113bf416367e0eb628696ef78b1e4f637afedffcecc39f2a5100db55a4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileLogin", array(), "method")) {
            // line 8
            echo "\t<li class=\"account-email\">
\t\t<span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileLogin", array(), "method"), "html", null, true);
            echo "</span>
\t</li>
\t<li class=\"separator\"><hr /></li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header.bar.links.logged.email.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Log out link*/
/*  #*/
/*  # @ListChild (list="layout.header.bar.links.logged", weight="-100")*/
/*  #}*/
/* */
/* {% if this.getProfileLogin() %}*/
/* 	<li class="account-email">*/
/* 		<span>{{ this.getProfileLogin() }}</span>*/
/* 	</li>*/
/* 	<li class="separator"><hr /></li>*/
/* {% endif %}*/
