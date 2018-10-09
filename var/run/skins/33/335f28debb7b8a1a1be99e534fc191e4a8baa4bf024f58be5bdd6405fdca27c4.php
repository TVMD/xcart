<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/footer.twig */
class __TwigTemplate_5bcc8164a07944523fa8ebc312d548c690a464ee03005527ec4dd165f393a793 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLandingPage", array(), "method")) {
            // line 7
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildURL", array(0 => "addons_list_marketplace"), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View all addons")), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Landing page header*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.footer", weight="10")*/
/*  #}*/
/* {% if this.isLandingPage() %}*/
/*   <a href="{{ this.buildURL('addons_list_marketplace') }}">{{ t('View all addons') }}</a>*/
/* {% endif %}*/
/* */
