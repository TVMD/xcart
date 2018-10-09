<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/option.files.twig */
class __TwigTemplate_d10c0f30db71b41825689b737485df9e630d9379712550d78ddb46f33a87e46b extends \XLite\Core\Templating\Twig\Template
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
<li class=\"files-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Select\\ExportFiles", "fieldName" => "options[files]", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Export public files as")), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Export", array()), "files", array()), "help" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Choosing \"URLs\" will link the exported data to your public files (product and category images, downloadable files shown on product pages, and so on) through direct URLs"))))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/option.files.twig";
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
/*  # Export begin section : settings : files setting*/
/*  #*/
/*  # @ListChild (list="export.begin.options", weight="100")*/
/*  #}*/
/* */
/* <li class="files-option">*/
/*   {{ widget('XLite\\View\\FormField\\Select\\ExportFiles', fieldName='options[files]', label=t('Export public files as'), value=this.config.Export.files, help=t('Choosing "URLs" will link the exported data to your public files (product and category images, downloadable files shown on product pages, and so on) through direct URLs')) }}*/
/* </li>*/
/* */
