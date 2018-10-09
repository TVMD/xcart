<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/Onboarding/wizard/header.twig */
class __TwigTemplate_2a60eab34335bc604c435b62e1a2acfc8e5a499078162ddfcbe543e8834722aa extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<div
  class=\"onboarding-wizard-header\">
  <div class=\"intro-text\" v-if=\"isCurrentStep('intro')\" transition=\"fade-in-out\">
    <h2 class=\"heading\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("onboarding.intro.heading")), "html", null, true);
        echo "</h2>
    <p class=\"text\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("onboarding.intro.text"));
        echo "</p>
  </div>
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\XC\\Onboarding\\View\\WizardProgress"))), "html", null, true);
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/Onboarding/wizard/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  29 => 9,  25 => 8,  19 => 4,);
    }
}
/* {##*/
/*  # @ListChild(list="onboarding-wizard.header", weight="100")*/
/*  #}*/
/* */
/* <div*/
/*   class="onboarding-wizard-header">*/
/*   <div class="intro-text" v-if="isCurrentStep('intro')" transition="fade-in-out">*/
/*     <h2 class="heading">{{ t('onboarding.intro.heading') }}</h2>*/
/*     <p class="text">{{ t('onboarding.intro.text')|raw }}</p>*/
/*   </div>*/
/*   {{ widget('XLite\\Module\\XC\\Onboarding\\View\\WizardProgress') }}*/
/* </div>*/
