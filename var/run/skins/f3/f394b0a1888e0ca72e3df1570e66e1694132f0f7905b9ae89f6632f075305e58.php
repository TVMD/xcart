<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module/status.twig */
class __TwigTemplate_f573005fb4a6c00ab757c70115d9965bb922bd576b7a563c3f7f231ad98af67e extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 7
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isEnabled", array(), "method")) {
                // line 8
                echo "  <li class=\"enabled\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("enabled")), "html", null, true);
                echo "</li>
";
            }
            // line 10
            if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isEnabled", array(), "method")) {
                // line 11
                echo "  <li class=\"disabled\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("now disabled")), "html", null, true);
                echo "</li>
";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  29 => 10,  23 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module status*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_upgrade.sections.table.info.module", weight="300")*/
/*  #}*/
/* {% if this.isModule(this.entry) %}*/
/* {% if this.entry.isEnabled() %}*/
/*   <li class="enabled">{{ t('enabled') }}</li>*/
/* {% endif %}*/
/* {% if not this.entry.isEnabled() %}*/
/*   <li class="disabled">{{ t('now disabled') }}</li>*/
/* {% endif %}*/
/* {% endif %}*/
/* */
