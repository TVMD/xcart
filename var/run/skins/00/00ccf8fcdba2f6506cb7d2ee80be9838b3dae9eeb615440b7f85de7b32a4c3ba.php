<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table.twig */
class __TwigTemplate_d9ca4a5a33e367cb46bf8663ab6a7e8af61ca79a5e37591bf114f89912727a56 extends \XLite\Core\Templating\Twig\Template
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
<table class=\"incompatible-modules-list\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIncompatibleEntries", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 9
            echo "    <tr>
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.columns", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
            echo "
    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  30 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Entries list*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections", weight="200")*/
/*  #}*/
/* */
/* <table class="incompatible-modules-list">*/
/*   {% for entry in this.getIncompatibleEntries() %}*/
/*     <tr>*/
/*       {{ widget_list('sections.table.columns', type='inherited', entry=entry) }}*/
/*     </tr>*/
/*   {% endfor %}*/
/* </table>*/
/* */
