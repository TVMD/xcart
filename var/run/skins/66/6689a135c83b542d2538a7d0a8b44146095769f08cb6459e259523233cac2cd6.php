<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info.twig */
class __TwigTemplate_268972a73eb2684a55f0a74987dcd516837b6874aa4ccc25a81b7f30dd527e35 extends \XLite\Core\Templating\Twig\Template
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
        echo "<ul class=\"module-info\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sections.table.info", "type" => "inherited", "entry" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())))), "html", null, true);
        echo "
</ul>
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info.twig";
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
/*  # Upgrade entry icon*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_upgrade.sections.table", weight="200")*/
/*  #}*/
/* <ul class="module-info">*/
/*   {{ widget_list('sections.table.info', type='inherited', entry=this.entry) }}*/
/* </ul>*/
/* <div class="clear"></div>*/
/* */
