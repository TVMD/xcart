<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/inline_editable/tinymce_warning_modal.twig */
class __TwigTemplate_2faa46d00aa513912ce464e512ce5ca645d14e2351fb1711462bdbc9622b898e extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isTinymceWarningVisible", array(), "method")) {
            // line 8
            echo "<xlite-themetweaker-modal :show=\"isTinymceWarningVisible\" namespace=\"tinymceWarning\">
  <p slot=\"body\" class=\"text-center\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Changes may be incompatible with TinyMCE. Are you sure to proceed?")), "html", null, true);
            echo "</p>
</xlite-themetweaker-modal>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ThemeTweaker/themetweaker/inline_editable/tinymce_warning_modal.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Layout editor panel*/
/*  #*/
/*  # @ListChild(list="inline_editor", weight="200")*/
/*  #}*/
/* */
/* {% if this.isTinymceWarningVisible() %}*/
/* <xlite-themetweaker-modal :show="isTinymceWarningVisible" namespace="tinymceWarning">*/
/*   <p slot="body" class="text-center">{{ t('Changes may be incompatible with TinyMCE. Are you sure to proceed?') }}</p>*/
/* </xlite-themetweaker-modal>*/
/* {% endif %}*/
