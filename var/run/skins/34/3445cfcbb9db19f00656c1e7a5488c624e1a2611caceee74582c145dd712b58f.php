<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/upgrade_notes.twig */
class __TwigTemplate_ca8ca5e958b2b25e77ecf60ddd538f5d3294e3aaf818ff4c6fc876f5510546ca extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleUpdateAvailable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  <div class=\"note version upgrade\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Installed version")), "html", null, true);
            echo ":&nbsp;";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleVersion", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleInstalled", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")), "method"), "html", null, true);
            echo "&nbsp;(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("outdated")), "html", null, true);
            echo ")<br />
    <a href=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "upgrade", "", array("mode" => "install_updates"))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Update module")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/upgrade_notes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  24 => 10,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="40")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section", weight="40")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section", weight="40")*/
/*  #}*/
/* {% if this.isModuleUpdateAvailable(this.module) %}*/
/*   <div class="note version upgrade">*/
/*     {{ t('Installed version') }}:&nbsp;{{ this.getModuleVersion(this.getModuleInstalled(this.module)) }}&nbsp;({{ t('outdated') }})<br />*/
/*     <a href="{{ url('upgrade', '', {'mode': 'install_updates'}) }}">{{ t('Update module') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
