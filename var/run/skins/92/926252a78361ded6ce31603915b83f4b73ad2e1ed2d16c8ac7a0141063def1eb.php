<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/version.twig */
class __TwigTemplate_b8b0b34a7ce6251bd063dd8dd59d27d1498e225a9bfa55a27e1280be098e31a3 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"version\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getVersionNew", array(), "method"), "html", null, true);
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/version.twig";
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
/*  # Upgrade entry version*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form.info", weight="300")*/
/*  #}*/
/* */
/* <li class="version">{{ this.entry.getVersionNew() }}</li>*/
/* */
