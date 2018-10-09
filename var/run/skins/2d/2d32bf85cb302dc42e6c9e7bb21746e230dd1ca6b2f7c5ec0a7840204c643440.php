<?php

/* /var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/permissions/buttons/copy.twig */
class __TwigTemplate_868fc2c848a17dc7ff7d05bee35019ae2ba8a43edbdc67786e33a6411bb643fe extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\CopyLink", "copy" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrongPermissionsAsString", array(), "method"), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Copy to clipboard"))))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/upgrade/step/ready_to_install/entries_list/parts/permissions/buttons/copy.twig";
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
/*  # Entries list*/
/*  #*/
/*  # @ListChild (list="upgrade.step.ready_to_install.entries_list.sections.permissions.buttons", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\CopyLink', copy=this.getWrongPermissionsAsString(), label=t('Copy to clipboard')) }}*/
