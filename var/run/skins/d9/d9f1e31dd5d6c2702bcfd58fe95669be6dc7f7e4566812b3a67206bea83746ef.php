<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/name.twig */
class __TwigTemplate_715f5f8e48c8e7669b9eb82cee5264c9a9617b1389832588c3f5338e3d4b3bd4 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"module-info\">
  <span class=\"name\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getModuleName", array(), "method"), "html", null, true);
        echo "</span>
  <span class=\"author\">(";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthorName", array(), "method"), "html", null, true);
        echo ")</span>
  ";
        // line 10
        if ( !twig_test_empty($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleAuthorEmail", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"))) {
            // line 11
            echo "    <span class=\"author-email\">
      <a href=\"mailto: ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleAuthorEmail", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModuleAuthorEmail", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
            echo "</a>
    </span>
  ";
        }
        // line 15
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_update/parts/table/columns/name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,  38 => 12,  35 => 11,  33 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Module name*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_update.sections.table.columns", weight="100")*/
/*  #}*/
/* */
/* <td class="module-info">*/
/*   <span class="name">{{ this.entry.getModuleName() }}</span>*/
/*   <span class="author">({{ t('by') }} {{ this.entry.getAuthorName() }})</span>*/
/*   {% if this.getModuleAuthorEmail(this.entry) is not empty %}*/
/*     <span class="author-email">*/
/*       <a href="mailto: {{ this.getModuleAuthorEmail(this.entry) }}">{{ this.getModuleAuthorEmail(this.entry) }}</a>*/
/*     </span>*/
/*   {% endif %}*/
/* </td>*/
/* */
