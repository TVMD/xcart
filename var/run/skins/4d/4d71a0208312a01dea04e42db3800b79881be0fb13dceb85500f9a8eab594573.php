<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/header/version.twig */
class __TwigTemplate_a7805ed3f001467c8a0710bd048b75887e67ad252e5f1319e6424e134c1204ed extends \XLite\Core\Templating\Twig\Template
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
<th colspan=\"3\" class=\"version-header\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Version change")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/header/version.twig";
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
/*  # The "Version" column header*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections.table.header", weight="200")*/
/*  #}*/
/* */
/* <th colspan="3" class="version-header">{{ t('Version change') }}</th>*/
/* */
