<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module/version.twig */
class __TwigTemplate_84b84b028d0ffad8d7e6ae84888fe7b35434c149d6c89118ed089b35af1f5385 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"version\"><span class=\"title\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Version")), "html", null, true);
        echo ":</span> ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getVersionNew", array(), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module/version.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry version*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_upgrade.sections.table.info.module", weight="100")*/
/*  #}*/
/* <li class="version"><span class="title">{{ t('Version') }}:</span> {{ this.entry.getVersionNew() }}</li>*/
/* */
