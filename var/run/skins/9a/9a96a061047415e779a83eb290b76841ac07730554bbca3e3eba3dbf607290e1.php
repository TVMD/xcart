<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table.twig */
class __TwigTemplate_1c19a0a81b08882423d5268f727d92958818e107433f62a8c59b806442c4c84f extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrongPermissions", array(), "method")) {
            // line 9
            echo "  <div class=\"modified-files-section\">
    <div class=\"modified-files-section-frame\">
    <div class=\"description\">";
            // line 11
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Permissions checking failed"));
            echo "</div>
    <ul class=\"modified-files-block\">
      ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrongPermissions", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 14
                echo "        <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["command"], "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['command'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "    </ul>
    <div class=\"modified-files-buttons\">
      ";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.permissions.buttons", "type" => "inherited"))), "html", null, true);
            echo "
    </div>
    </div>
  </div>
";
        }
        // line 23
        echo "
<table class=\"downloaded-components\">
  <tr class=\"header\">";
        // line 25
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.header", "type" => "inherited"))), "html", null, true);
        echo "</tr>
  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUpgradeEntries", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 27
            echo "
  ";
            // line 28
            if ( !$this->getAttribute($context["entry"], "getErrorMessages", array(), "method")) {
                // line 29
                echo "    <tr class=\"module-entry\" id=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEntryId", array(0 => $context["entry"]), "method"), "html", null, true);
                echo "\">
      ";
                // line 30
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.columns", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
                echo "
    </tr>
  ";
            }
            // line 33
            echo "
  ";
            // line 34
            if ($this->getAttribute($context["entry"], "getErrorMessages", array(), "method")) {
                // line 35
                echo "    <tr class=\"module-entry module-errors\" id=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEntryId", array(0 => $context["entry"]), "method"), "html", null, true);
                echo "\">
      ";
                // line 36
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.columns", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
                echo "
    </tr>
  ";
            }
            // line 39
            echo "
  ";
            // line 40
            if ($this->getAttribute($context["entry"], "getUpgradeChangelogs", array(), "method")) {
                // line 41
                echo "    <tr class=\"module-entry changelog\" id=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEntryId", array(0 => $context["entry"]), "method"), "html", null, true);
                echo "-changelog\">
      ";
                // line 42
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.columns.changelog", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
                echo "
    </tr>
  ";
            }
            // line 45
            echo "
  ";
            // line 46
            if ($this->getAttribute($context["entry"], "getErrorMessages", array(), "method")) {
                // line 47
                echo "    <tr class=\"error-messages\" id=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEntryId", array(0 => $context["entry"]), "method"), "html", null, true);
                echo "-errors\">
      ";
                // line 48
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.columns.error", "type" => "inherited", "messages" => $this->getAttribute($context["entry"], "getErrorMessages", array(), "method")))), "html", null, true);
                echo "
    </tr>
  ";
            }
            // line 51
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "
</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 52,  134 => 51,  128 => 48,  123 => 47,  121 => 46,  118 => 45,  112 => 42,  107 => 41,  105 => 40,  102 => 39,  96 => 36,  91 => 35,  89 => 34,  86 => 33,  80 => 30,  75 => 29,  73 => 28,  70 => 27,  66 => 26,  62 => 25,  58 => 23,  50 => 18,  46 => 16,  37 => 14,  33 => 13,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Entries list*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections", weight="100")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections", weight="200")*/
/*  #}*/
/* */
/* {% if this.getWrongPermissions() %}*/
/*   <div class="modified-files-section">*/
/*     <div class="modified-files-section-frame">*/
/*     <div class="description">{{ t('Permissions checking failed')|raw }}</div>*/
/*     <ul class="modified-files-block">*/
/*       {% for command in this.getWrongPermissions() %}*/
/*         <li>{{ command }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     <div class="modified-files-buttons">*/
/*       {{ widget_list('sections.permissions.buttons', type='inherited') }}*/
/*     </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* <table class="downloaded-components">*/
/*   <tr class="header">{{ widget_list('sections.table.header', type='inherited') }}</tr>*/
/*   {% for entry in this.getUpgradeEntries() %}*/
/* */
/*   {% if not entry.getErrorMessages() %}*/
/*     <tr class="module-entry" id="{{ this.getEntryId(entry) }}">*/
/*       {{ widget_list('sections.table.columns', type='inherited', entry=entry) }}*/
/*     </tr>*/
/*   {% endif %}*/
/* */
/*   {% if entry.getErrorMessages() %}*/
/*     <tr class="module-entry module-errors" id="{{ this.getEntryId(entry) }}">*/
/*       {{ widget_list('sections.table.columns', type='inherited', entry=entry) }}*/
/*     </tr>*/
/*   {% endif %}*/
/* */
/*   {% if entry.getUpgradeChangelogs() %}*/
/*     <tr class="module-entry changelog" id="{{ this.getEntryId(entry) }}-changelog">*/
/*       {{ widget_list('sections.table.columns.changelog', type='inherited', entry=entry) }}*/
/*     </tr>*/
/*   {% endif %}*/
/* */
/*   {% if entry.getErrorMessages() %}*/
/*     <tr class="error-messages" id="{{ this.getEntryId(entry) }}-errors">*/
/*       {{ widget_list('sections.table.columns.error', type='inherited', messages=entry.getErrorMessages()) }}*/
/*     </tr>*/
/*   {% endif %}*/
/*   {% endfor %}*/
/* */
/* </table>*/
/* */
