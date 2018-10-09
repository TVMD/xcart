<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/header/size.twig */
class __TwigTemplate_c97f16409901a087b166639bb02a14af2e769a7b9d8cdbc4e3733602be37d6a1 extends \XLite\Core\Templating\Twig\Template
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
<th class=\"size-header\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Size")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/header/size.twig";
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
/*  # The "Size" column header*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections.table.header", weight="300")*/
/*  #}*/
/* */
/* <th class="size-header">{{ t('Size') }}</th>*/
/* */
