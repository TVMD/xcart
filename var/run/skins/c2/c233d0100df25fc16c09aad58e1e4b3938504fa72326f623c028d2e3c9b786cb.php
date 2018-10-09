<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/core_upgrade_needed/note_2.twig */
class __TwigTemplate_93018a2748714b1a7104bca2fc4a5bd4b30f5c9215ba0eaeed7b2aa31e20d4ed extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCoreUpgradeAvailable", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getMajorVersion", array(), "method")), "method")) {
            // line 10
            echo "  <div>
    ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please")), "html", null, true);
            echo " <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "upgrade", "", array("version" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getMajorVersion", array(), "method")))), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("upgrade core")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/cannot_enable/core_upgrade_needed/note_2.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 11,  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # Recomendation to upgrade kernel*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-description-section.messages.cannot_enable.core_upgrade_needed", weight="200")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section.cannot_enable.core_upgrade_needed", weight="200")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-description-section.cannot_enable.core_upgrade_needed", weight="200")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-description-section.cannot_enable.core_upgrade_needed", weight="200")*/
/*  #}*/
/* {% if this.isCoreUpgradeAvailable(this.module.getMajorVersion()) %}*/
/*   <div>*/
/*     {{ t('Please') }} <a href="{{ url('upgrade', '', {'version': this.module.getMajorVersion()}) }}">{{ t('upgrade core') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
