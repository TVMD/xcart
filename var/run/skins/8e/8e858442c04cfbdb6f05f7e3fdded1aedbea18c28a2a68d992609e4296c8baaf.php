<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/completed/backup/part/description.twig */
class __TwigTemplate_25d23bee21751e146e4eafac4144c58b9919cb3e0e068cc44eb0a7eb44ce1675 extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "<div class=\"upgrade-note upgrade-description\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The upgrade is completed. Please, do not close this page until you check your web site and check that everything works properly")), "html", null, true);
        echo ".
</div>

";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Link", "style" => "main-button", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Open storefront")), "blank" => "1", "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getShopURL", array(), "method")))), "html", null, true);
        echo "

";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Upgrade\\Step\\Completed\\UpgradeNotes"))), "html", null, true);
        echo "

<div class=\"upgrade-note upgrade-description\">
  ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("If there are some critical errors occurred you can do the following")), "html", null, true);
        echo ":
</div>

";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "actions", "type" => "inherited"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/completed/backup/part/description.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  42 => 17,  36 => 14,  31 => 12,  25 => 9,  22 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Backup mesaage*/
/*  #*/
/*  # @ListChild (list="upgrade.step.completed.backup.sections", weight="100")*/
/*  #}*/
/* */
/* {# :NOTE: message is already translated #}*/
/* <div class="upgrade-note upgrade-description">*/
/*   {{ t('The upgrade is completed. Please, do not close this page until you check your web site and check that everything works properly') }}.*/
/* </div>*/
/* */
/* {{ widget('\\XLite\\View\\Button\\Link', style='main-button', label=t('Open storefront'), blank='1', location=this.getShopURL()) }}*/
/* */
/* {{ widget('\\XLite\\View\\Upgrade\\Step\\Completed\\UpgradeNotes') }}*/
/* */
/* <div class="upgrade-note upgrade-description">*/
/*   {{ t('If there are some critical errors occurred you can do the following') }}:*/
/* </div>*/
/* */
/* {{ widget_list('actions', type='inherited') }}*/
/* */
