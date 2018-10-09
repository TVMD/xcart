<?php

/* /var/www/next/output/xcart/src/skins/admin/layout_settings/settings/parts/settings.settings_form.twig */
class __TwigTemplate_d3bc9f599fe62b7ca4f6601ef207030c8abb6adb0960fde907cb490b8ed009eb extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showSettingsForm", array(), "method")) {
            // line 7
            echo "  <div class=\"settings-form\">
    ";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSettingsForm", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Edit custom options"))))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/layout_settings/settings/parts/settings.settings_form.twig";
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
/*  # Layout settings template*/
/*  #*/
/*  # @ListChild (list="layout_settings.settings", weight="40")*/
/*  #}*/
/* {% if this.showSettingsForm() %}*/
/*   <div class="settings-form">*/
/*     {{ widget('XLite\\View\\Button\\Link', location=this.getSettingsForm(), label=t('Edit custom options')) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
