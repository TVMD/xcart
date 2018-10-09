<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/status.twig */
class __TwigTemplate_d5c36428f96a9702338fa159b23dc3e80709f173bec28781ff3cc405d7dc5edc extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isEnabled", array(), "method")) {
            // line 8
            echo "  <td class=\"status\">&nbsp;</td>
";
        } else {
            // line 10
            echo "  ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isInstalled", array(), "method")) {
                // line 11
                echo "    <td class=\"status disabled\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Now disabled")), "html", null, true);
                echo "</td>
  ";
            }
            // line 13
            echo "  ";
            if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "isInstalled", array(), "method")) {
                // line 14
                echo "    <td class=\"status not-installed\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Will be installed")), "html", null, true);
                echo "</td>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_update/parts/table/columns/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 14,  37 => 13,  31 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # If entry disabled or enabled*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_update.sections.table.columns", weight="200")*/
/*  #}*/
/* */
/* {% if this.entry.isEnabled() %}*/
/*   <td class="status">&nbsp;</td>*/
/* {% else %}*/
/*   {% if this.entry.isInstalled() %}*/
/*     <td class="status disabled">{{ t('Now disabled') }}</td>*/
/*   {% endif %}*/
/*   {% if not this.entry.isInstalled() %}*/
/*     <td class="status not-installed">{{ t('Will be installed') }}</td>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
