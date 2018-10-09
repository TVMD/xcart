<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/not_avail_notice.twig */
class __TwigTemplate_c7116ac70895609f87eed3286eeb460a3728226027d6f4a1054dfccdcd665f97 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "showNotAvailModuleNotice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  <div class=\"note error xcn-module-notice\">
  ";
            // line 10
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("This module is available for X-Cart hosted stores only.", array("url" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMoreInfoURL", array(), "method"))));
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/not_avail_notice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 10,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Not available module notice*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="200")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="200")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="200")*/
/*  #}*/
/* {% if this.showNotAvailModuleNotice(this.module) %}*/
/*   <div class="note error xcn-module-notice">*/
/*   {{ t('This module is available for X-Cart hosted stores only.', {'url': this.getMoreInfoURL()})|raw }}*/
/*   </div>*/
/* {% endif %}*/
/* */
