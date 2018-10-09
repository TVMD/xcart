<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table.twig */
class __TwigTemplate_582e4270ce6bad7498fe0fdf9573efabefd716c2bff7266791e681d4ffa69eb5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"toggle-list\">
  <a href=\"javascript: void(0)\" onclick=\"toggleModulesList();\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("view list")), "html", null, true);
        echo "</a>
</div>

<div class=\"clearfix\"></div>

<ul class=\"update-module-list upgrade clearfix\">

  ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUpgradeEntries", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 15
            echo "    <li class=\"update-module-info\">
      ";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table", "type" => "inherited", "entry" => $context["entry"]))), "html", null, true);
            echo "
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 19,  39 => 16,  36 => 15,  32 => 14,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Entries list*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_upgrade.sections", weight="100")*/
/*  #}*/
/* <div class="toggle-list">*/
/*   <a href="javascript: void(0)" onclick="toggleModulesList();">{{ t('view list') }}</a>*/
/* </div>*/
/* */
/* <div class="clearfix"></div>*/
/* */
/* <ul class="update-module-list upgrade clearfix">*/
/* */
/*   {% for entry in this.getUpgradeEntries() %}*/
/*     <li class="update-module-info">*/
/*       {{ widget_list('sections.table', type='inherited', entry=entry) }}*/
/*     </li>*/
/*   {% endfor %}*/
/* */
/* </ul>*/
/* */
