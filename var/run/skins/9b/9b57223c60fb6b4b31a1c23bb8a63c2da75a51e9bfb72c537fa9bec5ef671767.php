<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/xcn_notice.twig */
class __TwigTemplate_3951650f4e1015873ca0a0b9376b49f8fa3341d0bea2ec088a9345c3276c396c extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showXCNModuleNotice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  <div class=\"note error xcn-module-notice\">
  <span>
  ";
            // line 11
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Module available editions 3", array("list" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEditions", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), 1 => 1), "method"))));
            echo "
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\ActivateKey", "label" => "Activate existing key"))), "html", null, true);
            echo "
    ";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Addon\\EnterLicenseKey", "label" => "Activate existing key"))), "html", null, true);
            echo "
  </span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/xcn_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  29 => 12,  25 => 11,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # X-Cart module notice*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="200")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="200")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="200")*/
/*  #}*/
/* {% if this.showXCNModuleNotice(this.module) %}*/
/*   <div class="note error xcn-module-notice">*/
/*   <span>*/
/*   {{ t('Module available editions 3', {'list': this.getEditions(this.module, 1)})|raw }}*/
/*     {{ widget('\\XLite\\View\\Button\\ActivateKey', label='Activate existing key') }}*/
/*     {{ widget('\\XLite\\View\\Button\\Addon\\EnterLicenseKey', label='Activate existing key') }}*/
/*   </span>*/
/*   </div>*/
/* {% endif %}*/
/* */
