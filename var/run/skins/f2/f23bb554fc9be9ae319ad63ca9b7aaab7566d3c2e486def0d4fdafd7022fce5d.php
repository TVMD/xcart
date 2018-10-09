<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/already_installed.twig */
class __TwigTemplate_2b5b1b67a79af76ef14e167e2ee3ca98bf06b152e9d83ae84b3b45d487c4135a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInstalled", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 9
            echo "  ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEnabled", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
                // line 10
                echo "    <div class=\"installed\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Installed")), "html", null, true);
                echo "</div>
  ";
            } else {
                // line 12
                echo "    <div class=\"installed-disabled\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Disabled")), "html", null, true);
                echo "</div>
  ";
            }
        }
        // line 15
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInstalled", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method")) {
            // line 16
            echo "  <div class=\"view-module-in-list\">
    <a href=\"";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModulePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "module", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("View in my addons")), "html", null, true);
            echo "</a>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/columns/info/already_installed.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 17,  39 => 16,  37 => 15,  30 => 12,  24 => 10,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Modules main section list*/
/*  #*/
/*  # @ListChild (list="itemsList.module.install.columns.module-main-section", weight="100")*/
/*  # @ListChild (list="itemsList.module.sales-channels.columns.module-main-section", weight="100")*/
/*  # @ListChild (list="itemsList.module.purchased.columns.module-main-section", weight="100")*/
/*  #}*/
/* {% if this.isInstalled(this.module) %}*/
/*   {% if this.isEnabled(this.module) %}*/
/*     <div class="installed">{{ t('Installed') }}</div>*/
/*   {% else %}*/
/*     <div class="installed-disabled">{{ t('Disabled') }}</div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* {% if this.isInstalled(this.module) %}*/
/*   <div class="view-module-in-list">*/
/*     <a href="{{ this.getModulePageURL(this.module) }}">{{ t('View in my addons') }}</a>*/
/*   </div>*/
/* {% endif %}*/
/* */
