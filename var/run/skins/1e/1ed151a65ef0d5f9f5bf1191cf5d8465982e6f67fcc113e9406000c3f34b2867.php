<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/option.delimiter.twig */
class __TwigTemplate_4874595c13735d4bef54f047cf6d29fae4833bf85b899549049c37944fd555f5 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"delimiter-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Select\\CSVDelimiter", "fieldName" => "options[delimiter]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("CSV delimiter")), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Units", array()), "csv_delim", array())))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/option.delimiter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Import begin section : settings : delimier*/
/*  #*/
/*  # @ListChild (list="import.begin.options", weight="400")*/
/*  #}*/
/* */
/* <li class="delimiter-option">*/
/*   {{ widget('XLite\\View\\FormField\\Select\\CSVDelimiter', fieldName='options[delimiter]', label=t('CSV delimiter'), value=this.config.Units.csv_delim) }}*/
/* </li>*/
/* */
