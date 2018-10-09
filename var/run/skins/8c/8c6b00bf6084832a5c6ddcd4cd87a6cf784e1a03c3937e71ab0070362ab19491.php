<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig */
class __TwigTemplate_fa94b9567f3e9382f2a61c50077f36da948ebfd03c480d0da8c5945ed58dbfa9 extends \XLite\Core\Templating\Twig\Template
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
<xlite-themetweaker-modal :show=\"isExitConfirmVisible\" namespace=\"exitConfirm\">
  <p slot=\"body\" class=\"text-center\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("You have unsaved changes. Are you really sure to exit?")), "html", null, true);
        echo "</p>
  <div slot=\"footer\">
    <button class=\"themetweaker-modal-button secondary\"
            @click=\"onExitConfirmDiscard\">
      <span>";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Discard changes")), "html", null, true);
        echo "</span>
    </button>
    <button class=\"themetweaker-modal-button\"
            @click=\"onExitConfirmSave\">
      <span>";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save")), "html", null, true);
        echo "</span>
    </button>
  </div>
</xlite-themetweaker-modal>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker_panel/panel_extensions/confirm_exit_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 16,  30 => 12,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="themetweaker-panel-extensions", weight="200")*/
/*  #}*/
/* */
/* <xlite-themetweaker-modal :show="isExitConfirmVisible" namespace="exitConfirm">*/
/*   <p slot="body" class="text-center">{{ t('You have unsaved changes. Are you really sure to exit?') }}</p>*/
/*   <div slot="footer">*/
/*     <button class="themetweaker-modal-button secondary"*/
/*             @click="onExitConfirmDiscard">*/
/*       <span>{{ t('Discard changes') }}</span>*/
/*     </button>*/
/*     <button class="themetweaker-modal-button"*/
/*             @click="onExitConfirmSave">*/
/*       <span>{{ t('Save') }}</span>*/
/*     </button>*/
/*   </div>*/
/* </xlite-themetweaker-modal>*/
