<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/checkbox.twig */
class __TwigTemplate_51830e3e521cb68e9941ff0f7acbdb56474fe7e5458062478eda8130a7474f13 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"disable\">
  ";
        // line 9
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleToDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 10
            echo "    <input id=\"toDisable";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getMarketplaceID", array(), "method"), "html", null, true);
            echo "\" type=\"checkbox\" name=\"toDisable[";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getMarketplaceID", array(), "method"), "html", null, true);
            echo "]\" value=\"1\" disabled=\"disabled\" checked=\"1\" />
  ";
        }
        // line 12
        echo "  ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleToDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 13
            echo "    <input id=\"toDisable";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getMarketplaceID", array(), "method"), "html", null, true);
            echo "\" type=\"hidden\" name=\"toDisable[";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getMarketplaceID", array(), "method"), "html", null, true);
            echo "]\" value=\"1\" />
  ";
        }
        // line 15
        echo "  ";
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModuleToDisable", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 16
            echo "    <input id=\"toDisable";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getMarketplaceID", array(), "method"), "html", null, true);
            echo "\" type=\"checkbox\" name=\"toDisable[";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getMarketplaceID", array(), "method"), "html", null, true);
            echo "]\" value=\"1\" />
  ";
        }
        // line 18
        echo "  <label for=\"toDisable";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getMarketplaceID", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Disable")), "html", null, true);
        echo "</label>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/checkbox.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  48 => 16,  45 => 15,  37 => 13,  34 => 12,  26 => 10,  23 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Selector*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections.table.columns", weight="300")*/
/*  #}*/
/* */
/* <td class="disable">*/
/*   {# :FIXME: see the FlexyCompiler #}*/
/*   {% if this.isModuleToDisable(this.entry) %}*/
/*     <input id="toDisable{{ this.entry.getMarketplaceID() }}" type="checkbox" name="toDisable[{{ this.entry.getMarketplaceID() }}]" value="1" disabled="disabled" checked="1" />*/
/*   {% endif %}*/
/*   {% if this.isModuleToDisable(this.entry) %}*/
/*     <input id="toDisable{{ this.entry.getMarketplaceID() }}" type="hidden" name="toDisable[{{ this.entry.getMarketplaceID() }}]" value="1" />*/
/*   {% endif %}*/
/*   {% if not this.isModuleToDisable(this.entry) %}*/
/*     <input id="toDisable{{ this.entry.getMarketplaceID() }}" type="checkbox" name="toDisable[{{ this.entry.getMarketplaceID() }}]" value="1" />*/
/*   {% endif %}*/
/*   <label for="toDisable{{ this.entry.getMarketplaceID() }}">{{ t('Disable') }}</label>*/
/* </td>*/
/* */
