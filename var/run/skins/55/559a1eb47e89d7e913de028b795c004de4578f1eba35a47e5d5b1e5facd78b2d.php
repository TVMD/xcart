<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/translation_notice.twig */
class __TwigTemplate_910eb263de037e212656129ae74344aa6048b62bfc96c478a733a57f44ac899f extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "isTranslation", array(), "method")) {
            // line 7
            echo "  <div class=\"description\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning! Installing this module will overwrite all language labels translated to the appropriate language.")), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/manage/parts/columns/module-description-section/translation_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules main description section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-description-section", weight="15")*/
/*  #}*/
/* {% if this.module.isTranslation() %}*/
/*   <div class="description">{{ t('Warning! Installing this module will overwrite all language labels translated to the appropriate language.') }}</div>*/
/* {% endif %}*/
/* */
