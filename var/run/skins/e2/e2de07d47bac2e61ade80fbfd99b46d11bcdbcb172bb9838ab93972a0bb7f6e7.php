<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/status.twig */
class __TwigTemplate_c50997b8970996df630f354f5fca713dddf450f9d5629d67d56d19f4145b1a01 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isValid", array(), "method")) {
            // line 9
            echo "  <td class=\"status enabled\"></td>
";
        }
        // line 11
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isValid", array(), "method")) {
            // line 12
            echo "  <td class=\"status disabled\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Failure")), "html", null, true);
            echo "</td>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/table/columns/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 12,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # If entry disabled or enabled*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.table.columns", weight="200")*/
/*  # @ListChild (list="upgrade.step.completed.entries_list.sections.table.columns", weight="200")*/
/*  #}*/
/* */
/* {% if this.entry.isValid() %}*/
/*   <td class="status enabled"></td>*/
/* {% endif %}*/
/* {% if not this.entry.isValid() %}*/
/*   <td class="status disabled">{{ t('Failure') }}</td>*/
/* {% endif %}*/
/* */
