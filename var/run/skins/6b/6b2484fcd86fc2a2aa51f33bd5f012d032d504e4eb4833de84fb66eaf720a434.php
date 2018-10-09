<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/upgrade_notes.twig */
class __TwigTemplate_012da72de0b0b3abe7707c23fa216abea98b9cd3f8bcc8bb4374db6443ced1b2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleUpgradeAvailable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 8
            echo "  <div class=\"note version upgrade\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Version")), "html", null, true);
            echo ":&nbsp;";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleVersion", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleForUpgrade", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")), "method"), "html", null, true);
            echo "&nbsp;";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("is available")), "html", null, true);
            echo "<br />
    <a href=\"";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "upgrade", "", array("mode" => "install_updates"))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Upgrade module")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/upgrade_notes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages", weight="40")*/
/*  #}*/
/* */
/* {% if this.isModuleUpgradeAvailable(this.module) %}*/
/*   <div class="note version upgrade">*/
/*     {{ t('Version') }}:&nbsp;{{ this.getModuleVersion(this.getModuleForUpgrade(this.module)) }}&nbsp;{{ t('is available') }}<br />*/
/*     <a href="{{ url('upgrade', '', {'mode': 'install_updates'}) }}">{{ t('Upgrade module') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
