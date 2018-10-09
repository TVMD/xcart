<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/profile.twig */
class __TwigTemplate_068d9fb4ccbe0aad7393acfe37907419139b493fe9d111aab20ab768ac196888 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLogged", array(), "method")) {
            // line 8
            echo "\t<li class=\"account-link-profile\">
\t\t<a href=\"";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order_list", "")), "html", null, true);
            echo "\" class=\"profile icon-my-account-profile\">
\t\t\t<span>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("My account")), "html", null, true);
            echo "</span>
\t\t</a>
\t</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/layout/header/header_settings/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Account link*/
/*  #*/
/*  # @ListChild (list="slidebar.additional-menu.links", weight="10")*/
/*  #}*/
/* */
/* {% if this.isLogged() %}*/
/* 	<li class="account-link-profile">*/
/* 		<a href="{{ url('order_list', '') }}" class="profile icon-my-account-profile">*/
/* 			<span>{{ t('My account') }}</span>*/
/* 		</a>*/
/* 	</li>*/
/* {% endif %}*/
/* */
