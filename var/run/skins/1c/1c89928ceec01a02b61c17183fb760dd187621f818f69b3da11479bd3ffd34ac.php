<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/install.twig */
class __TwigTemplate_0da8c9d98f8a9a71d6a1553d30e6f6d7de3fd459c8942a94daa7af542f190316 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "canInstall", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  <div class=\"install-section\">
    <div class=\"install\">
      ";
            // line 11
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "installViaButton", array(), "method")) {
                // line 12
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ModulesManager\\Action\\Install", "moduleID" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method")))), "html", null, true);
                echo "
      ";
            } else {
                // line 14
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\ModulesManager\\Action\\SelectToInstall", "moduleID" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array()), "getModuleID", array(), "method")))), "html", null, true);
                echo "
      ";
            }
            // line 16
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/install.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  33 => 14,  27 => 12,  25 => 11,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Install action*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section.actions", weight="100")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="200")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section.actions", weight="100")*/
/*  #}*/
/* {% if this.canInstall(this.module) %}*/
/*   <div class="install-section">*/
/*     <div class="install">*/
/*       {% if this.installViaButton() %}*/
/*         {{ widget('\\XLite\\View\\ModulesManager\\Action\\Install', moduleID=this.module.getModuleID()) }}*/
/*       {% else %}*/
/*         {{ widget('\\XLite\\View\\ModulesManager\\Action\\SelectToInstall', moduleID=this.module.getModuleID()) }}*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
