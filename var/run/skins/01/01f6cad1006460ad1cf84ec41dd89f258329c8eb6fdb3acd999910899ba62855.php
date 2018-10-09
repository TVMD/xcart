<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/name.twig */
class __TwigTemplate_6dc1e803c25c571b4b01d13d52c94f3bf97aadc117c9720dc7dd55ccc08a1f66 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
        echo "</span>
  <span class=\"author\">(";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("by")), "html", null, true);
        echo " ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
        echo ")</span>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Entry name*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections.table.columns", weight="100")*/
/*  #}*/
/* */
/* <td class="module-info">*/
/*   <span class="name">{{ this.entry.getName() }}</span>*/
/*   <span class="author">({{ t('by') }} {{ this.entry.getAuthor() }})</span>*/
/* </td>*/
/* */
