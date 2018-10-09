<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/trial_notice.twig */
class __TwigTemplate_cf97bab6609a4d254e5279c8975e2188a0ac18a1b5f640945bc9b5d9b64ec4a0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayTrialNotice", array(), "method")) {
            // line 7
            echo "  <div class=\"update-trial-notice\">
    ";
            // line 8
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("You can install these updates after purchasing and activating your X-Cart license key", array("URL" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPurchaseURL", array(), "method"))));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/buttons/parts/trial_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Trial upgrade notice*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.buttons.sections", weight="200")*/
/*  #}*/
/* {% if this.displayTrialNotice() %}*/
/*   <div class="update-trial-notice">*/
/*     {{ t('You can install these updates after purchasing and activating your X-Cart license key', {'URL': this.getPurchaseURL()})|raw }}*/
/*   </div>*/
/* {% endif %}*/
/* */
