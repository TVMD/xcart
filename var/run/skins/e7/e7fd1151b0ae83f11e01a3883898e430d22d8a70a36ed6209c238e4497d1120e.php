<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/component.twig */
class __TwigTemplate_e8025a37cae503cdf88b8d44e92206962ad853e1bd8ee66aa323f965e1ebbd33 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"module-info\">
  <span class=\"name\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
        echo "</span>
  <span class=\"author\">(";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
        echo ")</span>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/component.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Entry name and author*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.columns", weight="100")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections.table.columns", weight="100")*/
/*  #}*/
/* */
/* <td class="module-info">*/
/*   <span class="name">{{ this.entry.getName() }}</span>*/
/*   <span class="author">({{ t('by') }} {{ this.entry.getAuthor() }})</span>*/
/* </td>*/
/* */
