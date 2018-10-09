<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/description.twig */
class __TwigTemplate_cabfc8072ef1b581d1c33928f19e2eb1bc803b616bd80311a4c58fdda5e2b50c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRequestForUpgradeAvailable", array(), "method")) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ProgressState", "label" => "Request for upgrade", "style" => "request-for-upgrade"))), "html", null, true);
            echo "
";
        }
        // line 9
        echo "
";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRequestForUpgradeAvailable", array(), "method")) {
            // line 11
            echo "  <div class=\"incompatible-module-list-description\">
    ";
            // line 12
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("The following modules currently do not have a version compatible with the X-Cart version to which you are upgrading"));
            echo "
  </div>
";
        }
        // line 15
        echo "
";
        // line 16
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRequestForUpgradeAvailable", array(), "method")) {
            // line 17
            echo "  <div class=\"incompatible-module-list-description\">
    ";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Please note that some of these modules are definitely incompatible with the upcoming upgrade and will be disabled in order to prevent the system crash")), "html", null, true);
            echo ".
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  46 => 17,  44 => 16,  41 => 15,  35 => 12,  32 => 11,  30 => 10,  27 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Info message*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_upgrade.sections", weight="100")*/
/*  #}*/
/* {% if this.isRequestForUpgradeAvailable() %}*/
/*   {{ widget('\\XLite\\View\\Button\\ProgressState', label='Request for upgrade', style='request-for-upgrade') }}*/
/* {% endif %}*/
/* */
/* {% if this.isRequestForUpgradeAvailable() %}*/
/*   <div class="incompatible-module-list-description">*/
/*     {{ t('The following modules currently do not have a version compatible with the X-Cart version to which you are upgrading')|raw }}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if not this.isRequestForUpgradeAvailable() %}*/
/*   <div class="incompatible-module-list-description">*/
/*     {{ t('Please note that some of these modules are definitely incompatible with the upcoming upgrade and will be disabled in order to prevent the system crash') }}.*/
/*   </div>*/
/* {% endif %}*/
/* */
