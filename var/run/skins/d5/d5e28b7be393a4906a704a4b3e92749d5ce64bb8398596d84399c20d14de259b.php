<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/name.twig */
class __TwigTemplate_732e64452604d1025d6280ba8ff30b860900cc4614c0253c950e117ae43bd9cc extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"name\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInstalledModuleURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getModuleName", array(), "method"), "html", null, true);
        echo "</a></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/name.twig";
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
/*  # Upgrade entry name*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_upgrade.sections.table.info", weight="100")*/
/*  #}*/
/* <li class="name"><a href="{{ this.getInstalledModuleURL(this.entry) }}">{{ this.entry.getModuleName() }}</a></li>*/
/* */
