<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table.twig */
class __TwigTemplate_e49bcb031884a4a1c1c7c804f93f374f883c5288cac5fe0f8da4c315e6a5a93f extends \XLite\Core\Templating\Twig\Template
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
<table class=\"entries-list\">
  <tr class=\"header\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.header", "type" => "inherited"))), "html", null, true);
        echo "</tr>
  <tr class=\"separator\"><td colspan=\"6\"></td></tr>
  ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUpgradeEntries", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 11
            echo "  <tr class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEntryRowCSSClass", array(0 => $context["entry"]), "method"), "html", null, true);
            echo "\">
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.columns", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
            echo "
    ";
            // line 13
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $context["entry"]), "method")) {
                // line 14
                echo "      </tr><tr class=\"separator\"><td colspan=\"6\"></td>
    ";
            }
            // line 16
            echo "  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  47 => 16,  43 => 14,  41 => 13,  37 => 12,  32 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Entries list*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections", weight="100")*/
/*  #}*/
/* */
/* <table class="entries-list">*/
/*   <tr class="header">{{ widget_list('sections.table.header', type='inherited') }}</tr>*/
/*   <tr class="separator"><td colspan="6"></td></tr>*/
/*   {% for entry in this.getUpgradeEntries() %}*/
/*   <tr class="{{ this.getEntryRowCSSClass(entry) }}">*/
/*     {{ widget_list('sections.table.columns', type='inherited', entry=entry) }}*/
/*     {% if not this.isModule(entry) %}*/
/*       </tr><tr class="separator"><td colspan="6"></td>*/
/*     {% endif %}*/
/*   </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
