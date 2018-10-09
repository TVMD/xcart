<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/size.twig */
class __TwigTemplate_e6ed1d43df8657e32a19ca3578d3213b5a4d447bbb734c2269e3e0259d947678 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"size\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatFileSize", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getPackSize", array(), "method")), "method"), "html", null, true);
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/size.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Entry pack size*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections.table.columns", weight="600")*/
/*  #}*/
/* */
/* <td class="size">{{ this.formatFileSize(this.entry.getPackSize()) }}</td>*/
/* */
