<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/module/version.twig */
class __TwigTemplate_1705bc236023d79f043a4b3f6936c7d708335fa6e6734495bcbd1b1eb213e880 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getVersion", array(), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/module/version.twig";
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
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_upgrade.sections.table.info.module", weight="100")*/
/*  #}*/
/* <li class="version"><span class="title">{{ t('Version') }}:</span> {{ this.entry.getVersion() }}</li>*/
/* */
