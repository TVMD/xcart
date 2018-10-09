<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info.twig */
class __TwigTemplate_1f20dedac013ee6f80067c2d6d2affbee74e33a30398a7a746b56dad9376ad51 extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"module-info\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.form.info", "type" => "inherited", "entry" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())))), "html", null, true);
        echo "
</ul>
<div class=\"clearfix\"></div>
";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAdvancedMode", array(), "method")) {
            // line 12
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEntrySelectable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
                // line 13
                echo "  <div class=\"advanced-checkbox";
                if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
                    echo " core";
                }
                if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAvailableForUpgradeWithoutCore", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
                    echo " entry-unavailable-without-core";
                }
                echo "\">
    ";
                // line 14
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
                    // line 15
                    echo "      <label for=\"entry-";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleID", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
                    echo "\">
        <input type=\"checkbox\" id=\"entry-";
                    // line 16
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleID", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
                    echo "\" name=\"entries[";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleID", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
                    echo "]\" value=\"1\" checked />
        ";
                    // line 17
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Update")), "html", null, true);
                    echo "
      </label>
    ";
                }
                // line 20
                echo "    ";
                if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
                    // line 21
                    echo "      <label for=\"entry-core\">
        <input type=\"checkbox\" id=\"entry-core\" name=\"entries[core]\" value=\"1\" checked />
        ";
                    // line 23
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Update")), "html", null, true);
                    echo "
      </label>
    ";
                }
                // line 26
                echo "    <span class=\"not-available-text\">
      ";
                // line 27
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Will be available if core update is selected")), "html", null, true);
                echo "
    </span>
  </div>
";
            }
            // line 31
            if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEntrySelectable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
                // line 32
                echo "  <div class=\"advanced-checkbox not-selectable\">
  ";
                // line 33
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Will be updated if core update is selected")), "html", null, true);
                echo "
  </div>
";
            }
        }
        // line 37
        echo "<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  90 => 33,  87 => 32,  85 => 31,  78 => 27,  75 => 26,  69 => 23,  65 => 21,  62 => 20,  56 => 17,  50 => 16,  45 => 15,  43 => 14,  33 => 13,  31 => 12,  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry icon*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form", weight="200")*/
/*  #}*/
/* */
/* <ul class="module-info">*/
/*   {{ widget_list('sections.form.info', type='inherited', entry=this.entry) }}*/
/* </ul>*/
/* <div class="clearfix"></div>*/
/* {% if this.isAdvancedMode() %}*/
/* {% if this.isEntrySelectable(this.entry) %}*/
/*   <div class="advanced-checkbox{% if not this.isModule(this.entry) %} core{% endif %}{% if not this.isAvailableForUpgradeWithoutCore(this.entry) %} entry-unavailable-without-core{% endif %}">*/
/*     {% if this.isModule(this.entry) %}*/
/*       <label for="entry-{{ this.getModuleID(this.entry) }}">*/
/*         <input type="checkbox" id="entry-{{ this.getModuleID(this.entry) }}" name="entries[{{ this.getModuleID(this.entry) }}]" value="1" checked />*/
/*         {{ t('Update') }}*/
/*       </label>*/
/*     {% endif %}*/
/*     {% if not this.isModule(this.entry) %}*/
/*       <label for="entry-core">*/
/*         <input type="checkbox" id="entry-core" name="entries[core]" value="1" checked />*/
/*         {{ t('Update') }}*/
/*       </label>*/
/*     {% endif %}*/
/*     <span class="not-available-text">*/
/*       {{ t('Will be available if core update is selected') }}*/
/*     </span>*/
/*   </div>*/
/* {% endif %}*/
/* {% if not this.isEntrySelectable(this.entry) %}*/
/*   <div class="advanced-checkbox not-selectable">*/
/*   {{ t('Will be updated if core update is selected') }}*/
/*   </div>*/
/* {% endif %}*/
/* {% endif %}*/
/* <div class="clear"></div>*/
/* */
