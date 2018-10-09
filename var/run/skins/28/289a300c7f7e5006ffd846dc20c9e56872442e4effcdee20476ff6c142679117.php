<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/completed/backup/part/actions/hard_reset.twig */
class __TwigTemplate_e2bd6cc0748a40682b196bc3ced27d92bbf393e6db921b8299e0f88bae5f5186 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"upgrade-note hard-reset\">
  <span class=\"hard-reset-label\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Disables all addons except ones that are provided by X-Cart Team (hard reset)"));
        echo ":</span>
  <div class=\"hard-reset-link-block safe-mode-link\">
\t";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\CopyLink", "copy" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHardResetURL", array(), "method")))), "html", null, true);
        echo "
  \t";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getHardResetURL", array(), "method"), "html", null, true);
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/completed/backup/part/actions/hard_reset.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  28 => 11,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Hard reset*/
/*  #*/
/*  # @ListChild (list="upgrade.step.completed.backup.actions", weight="200")*/
/*  # @ListChild (list="upgrade.step.ready_to_install.create_backup.actions", weight="200")*/
/*  #}*/
/* */
/* <div class="upgrade-note hard-reset">*/
/*   <span class="hard-reset-label">{{ t('Disables all addons except ones that are provided by X-Cart Team (hard reset)')|raw }}:</span>*/
/*   <div class="hard-reset-link-block safe-mode-link">*/
/* 	{{ widget('XLite\\View\\Button\\CopyLink', copy=this.getHardResetURL()) }}*/
/*   	{{ this.getHardResetURL() }}*/
/*   </div>*/
/* </div>*/
/* */
