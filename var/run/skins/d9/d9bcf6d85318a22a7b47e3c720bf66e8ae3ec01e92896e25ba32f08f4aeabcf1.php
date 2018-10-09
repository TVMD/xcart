<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/name.twig */
class __TwigTemplate_c82fc2783a2391fd9f64bef3502ab02c4295faf3c6024da07964ff1b0d091182 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 8
            echo "  <li class=\"name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
            echo "</li>
";
        }
        // line 10
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 11
            echo "  <li class=\"name core\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getName", array(), "method"), "html", null, true);
            echo "</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/install_updates/parts/form/info/name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 11,  30 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Upgrade entry name*/
/*  #*/
/*  # @ListChild (list="upgrade.install_updates.sections.form.info", weight="100")*/
/*  #}*/
/* */
/* {% if this.isModule(this.entry) %}*/
/*   <li class="name">{{ this.entry.getName() }}</li>*/
/* {% endif %}*/
/* {% if not this.isModule(this.entry) %}*/
/*   <li class="name core">{{ this.entry.getName() }}</li>*/
/* {% endif %}*/
/* */
