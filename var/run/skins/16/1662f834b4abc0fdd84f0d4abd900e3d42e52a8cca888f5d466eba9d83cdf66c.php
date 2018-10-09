<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module/author.twig */
class __TwigTemplate_19582623a0a623e74947285353c98f190733dd09f61cf00d3973298aece49b58 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isModule", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array())), "method")) {
            // line 7
            echo "  <li class=\"author\">
    <span class=\"title\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Author")), "html", null, true);
            echo ":</span>
    <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
            echo "</span>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/entries_list_upgrade/parts/table/info/module/author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module author*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.entries_list_upgrade.sections.table.info.module", weight="200")*/
/*  #}*/
/* {% if this.isModule(this.entry) %}*/
/*   <li class="author">*/
/*     <span class="title">{{ t('Author') }}:</span>*/
/*     <span>{{ this.entry.getAuthor() }}</span>*/
/*   </li>*/
/* {% endif %}*/
/* */
