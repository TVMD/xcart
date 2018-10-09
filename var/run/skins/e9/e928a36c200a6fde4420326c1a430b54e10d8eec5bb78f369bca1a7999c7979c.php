<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/header/status.twig */
class __TwigTemplate_0995ce7d73dad4fdec3d1858fb4d388ab8561cd69a7cda39d388d3334724c48e extends \XLite\Core\Templating\Twig\Template
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
<th class=\"status\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Status")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/header/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # The "Status" column header*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.header", weight="200")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections.table.header", weight="200")*/
/*  #}*/
/* */
/* <th class="status">{{ t('Status') }}</th>*/
/* */
