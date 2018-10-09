<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/module/author.twig */
class __TwigTemplate_997ded0fd6925754a6ff73917f0145975496b4df25b3730272de46a20cd4762e extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"author\">
  <span class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Author")), "html", null, true);
        echo ":</span>
  ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthorPageUrl", array(), "method")) {
            // line 9
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthorPageUrl", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
            echo "</a>
  ";
        }
        // line 11
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthorPageUrl", array(), "method")) {
            // line 12
            echo "    <span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entry", array()), "getAuthor", array(), "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 14
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/prepare/incompatible_entries_upgrade/parts/table/info/module/author.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  39 => 12,  36 => 11,  28 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Module author*/
/*  #*/
/*  # @ListChild (list="upgrade.step.prepare.incompatible_entries_upgrade.sections.table.info.module", weight="200")*/
/*  #}*/
/* <li class="author">*/
/*   <span class="title">{{ t('Author') }}:</span>*/
/*   {% if this.entry.getAuthorPageUrl() %}*/
/*     <a href="{{ this.entry.getAuthorPageUrl() }}">{{ this.entry.getAuthor() }}</a>*/
/*   {% endif %}*/
/*   {% if not this.entry.getAuthorPageUrl() %}*/
/*     <span>{{ this.entry.getAuthor() }}</span>*/
/*   {% endif %}*/
/* </li>*/
/* */
