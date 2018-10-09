<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/request_for_upgrade.twig */
class __TwigTemplate_fd5d219d516179fe5d1874cf01c662a2891514dc83103f8b878cfbc7a36f0a3b extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasErrors", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isUpgradeRequestAvailable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"))) {
            // line 10
            echo "    <div class=\"request-for-upgrade\" data-module-id=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleId", array(), "method"), "html", null, true);
            echo "\">
        ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\ProgressState", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Request for upgrade")), "style" => "btn regular-button always-enabled"))), "html", null, true);
            // line 13
            echo "
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-main-section/request_for_upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 13,  26 => 11,  21 => 10,  19 => 9,);
    }
}
/* {##*/
/*  # "Module upgrade needed"*/
/*  #*/
/*  # @ListChild (list="itemsList.module.manage.columns.module-main-section", weight="40")*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="40")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="40")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="40")*/
/*  #}*/
/* {% if this.hasErrors(this.module) and this.isUpgradeRequestAvailable(this.module) %}*/
/*     <div class="request-for-upgrade" data-module-id="{{ this.module.getModuleId() }}">*/
/*         {{  widget('XLite\\View\\Button\\ProgressState',*/
/*         label=t('Request for upgrade'),*/
/*         style='btn regular-button always-enabled') }}*/
/*     </div>*/
/* {% endif %}*/
/* */
