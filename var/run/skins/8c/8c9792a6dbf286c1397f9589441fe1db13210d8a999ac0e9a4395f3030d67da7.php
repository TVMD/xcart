<?php

/* /var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.name.twig */
class __TwigTemplate_edd22d601959bd0aca7c2ac07a2dded9991d205d91e14044e0689ff8b96cc9bf extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text", "fieldName" => "zone_name", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Zone name")), "value" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "zone", array()), "getZoneName", array(), "method"), "required" => "true", "wrapperClass" => "zone-name"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/zones/details/parts/field.name.twig";
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
/*  # Zone: name field template*/
/*  #*/
/*  # @ListChild (list="zones.zone", weight="100")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Input\\Text', fieldName='zone_name', label=t('Zone name'), value=this.zone.getZoneName(), required='true', wrapperClass='zone-name') }}*/
/* */
