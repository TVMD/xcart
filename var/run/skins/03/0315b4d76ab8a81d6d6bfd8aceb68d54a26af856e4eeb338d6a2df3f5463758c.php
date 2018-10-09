<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/top.twig */
class __TwigTemplate_dda4c90e8ee956b8a5882a38273147b278ced6b457f1e147e0fd486465419fdb extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 8
            echo "  <div class=\"upgrade-warning\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("In advanced mode you can choose specific modules for upgrade.")), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 12
            echo "  <div class=\"alert alert-warning upgrade-warning\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please be warned that proper operation of the site after an upgrade is not guaranteed if you choose to upgrade only some of the components listed below.")), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  33 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Top message for the advanced mode*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections", weight="100")*/
/*  #}*/
/* */
/* {% if this.isAdvancedMode() %}*/
/*   <div class="upgrade-warning">{{ t('In advanced mode you can choose specific modules for upgrade.') }}</div>*/
/* {% endif %}*/
/* */
/* {% if this.isAdvancedMode() %}*/
/*   <div class="alert alert-warning upgrade-warning">{{ t('Please be warned that proper operation of the site after an upgrade is not guaranteed if you choose to upgrade only some of the components listed below.') }}</div>*/
/* {% endif %}*/
/* */
