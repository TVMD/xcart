<?php

/* /var/www/next/output/xcart/src/skins/admin/layout_settings/parts/layout_settings.change_template.twig */
class __TwigTemplate_36277eee9c4ac47f16285851e80d33e0cdbc3a7184b40eab8d912ee2d8c03185 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"change-template\">
  <div class=\"header\">
    <h2>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Choose a new template")), "html", null, true);
        echo "</h2>

    <div class=\"right\">
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\SimpleLink", "label" => "Visit the template store", "location" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTemplatesStoreURL", array(), "method"), "blank" => "true"))), "html", null, true);
        echo "

      <span class=\"or\">";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("or")), "html", null, true);
        echo "</span>

      ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\ActivateLicenseKey", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Activate purchased skin"))))), "html", null, true);
        echo "

      ";
        // line 18
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Addon\\EnterLicenseKey", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Activate purchased skin"))))), "html", null, true);
        echo "

      ";
        // line 20
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Tooltip", "className" => "help-icon", "text" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("If you purchased a template but do not see it here, activate the license key that was provided to you."))))), "html", null, true);
        echo "
    </div>
    <div class=\"clear\"></div>
  </div>
  ";
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Model\\ChangeTemplate"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/layout_settings/parts/layout_settings.change_template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 24,  50 => 20,  45 => 18,  40 => 16,  35 => 14,  30 => 12,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Layout settings template*/
/*  #*/
/*  # @ListChild (list="layout_settings", weight="20")*/
/*  #}*/
/* */
/* <div class="change-template">*/
/*   <div class="header">*/
/*     <h2>{{ t('Choose a new template') }}</h2>*/
/* */
/*     <div class="right">*/
/*       {{ widget('XLite\\View\\Button\\SimpleLink', label='Visit the template store', location=this.getTemplatesStoreURL(), blank='true') }}*/
/* */
/*       <span class="or">{{ t('or') }}</span>*/
/* */
/*       {{ widget('XLite\\View\\Button\\Addon\\ActivateLicenseKey', label=t('Activate purchased skin')) }}*/
/* */
/*       {{ widget('XLite\\View\\Button\\Addon\\EnterLicenseKey', label=t('Activate purchased skin')) }}*/
/* */
/*       {{ widget('XLite\\View\\Tooltip', className='help-icon', text=t('If you purchased a template but do not see it here, activate the license key that was provided to you.')) }}*/
/*     </div>*/
/*     <div class="clear"></div>*/
/*   </div>*/
/*   {{ widget('XLite\\View\\Model\\ChangeTemplate') }}*/
/* </div>*/
/* */
