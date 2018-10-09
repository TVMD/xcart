<?php

/* /var/www/next/output/xcart/src/skins/admin/import/parts/option.update_only.twig */
class __TwigTemplate_380e4d91cfddda63a2f50c6512d243f374ed6a2fafda44a21b6014b1c1b963bb extends \XLite\Core\Templating\Twig\Template
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
<li class=\"import-mode-option\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Select\\Regular", "fieldName" => "options[importMode]", "fieldId" => "importMode", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Import mode")), "value" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "config", array()), "Import", array()), "importMode", array()), "options" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImportModeOptions", array(), "method")))), "html", null, true);
        echo "
  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImportModeComment", array(), "method")) {
            // line 10
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Tooltip", "text" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getImportModeComment", array(), "method"), "isImageTag" => "true", "className" => "help-icon", "placement" => "bottom"))), "html", null, true);
            echo "
  ";
        }
        // line 12
        echo "</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/import/parts/option.update_only.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 12,  29 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Import begin section : settings : update-mode*/
/*  #*/
/*  # @ListChild (list="import.begin.options", weight="100")*/
/*  #}*/
/* */
/* <li class="import-mode-option">*/
/*   {{ widget('\\XLite\\View\\FormField\\Select\\Regular', fieldName='options[importMode]', fieldId='importMode', label=t('Import mode'), value=this.config.Import.importMode, options=this.getImportModeOptions()) }}*/
/*   {% if this.getImportModeComment() %}*/
/*     {{ widget('\\XLite\\View\\Tooltip', text=this.getImportModeComment(), isImageTag='true', className='help-icon', placement='bottom') }}*/
/*   {% endif %}*/
/* </li>*/
/* */
