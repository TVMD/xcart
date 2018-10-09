<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/begin.sections.twig */
class __TwigTemplate_ef64d8a3ecc570008716cb96fafef37b093db7470f54ce1f5b03ec238e072107 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"parts\">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("What to export")), "html", null, true);
        echo "</h3>
  <ul class=\"clearfix sections\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSections", array(), "method"));
        foreach ($context['_seq'] as $context["i"] => $context["section"]) {
            // line 11
            echo "      <li>
        <input type=\"checkbox\" name=\"section[]\" value=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\" id=\"section";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatClassNameToString", array(0 => $context["i"]), "method"), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSectionSelected", array(0 => $context["i"]), "method")) {
                echo "checked=\"checked\"";
            }
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSectionDisabled", array(0 => $context["i"]), "method")) {
                echo " disabled=\"disabled\"";
            }
            echo " />
        <label for=\"section";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatClassNameToString", array(0 => $context["i"]), "method"), "html", null, true);
            echo "\"";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSectionDisabled", array(0 => $context["i"]), "method")) {
                echo " class=\"disabled\"";
            }
            echo ">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["section"])), "html", null, true);
            echo "</label>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['section'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/begin.sections.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  48 => 13,  35 => 12,  32 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Export begin section : sections*/
/*  #*/
/*  # @ListChild (list="export.begin.content", weight="100")*/
/*  #}*/
/* */
/* <div class="parts">*/
/*   <h3>{{ t('What to export') }}</h3>*/
/*   <ul class="clearfix sections">*/
/*     {% for i, section in this.getSections() %}*/
/*       <li>*/
/*         <input type="checkbox" name="section[]" value="{{ i }}" id="section{{ this.formatClassNameToString(i) }}"{% if this.isSectionSelected(i) %}checked="checked"{% endif %}{% if this.isSectionDisabled(i) %} disabled="disabled"{% endif %} />*/
/*         <label for="section{{ this.formatClassNameToString(i) }}"{% if this.isSectionDisabled(i) %} class="disabled"{% endif %}>{{ t(section) }}</label>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
