<?php

/* /var/www/next/output/xcart/src/skins/admin/images_settings/parts/resize_quality.twig */
class __TwigTemplate_f03b9c3753a9acc2cc75091f82e8b96642df3f599e3158cd9e40c65e725f25af extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Text\\Integer", "fieldName" => "resize_quality", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResizeQuality", array(), "method"), "label" => "Image quality after resize", "min" => 1, "max" => 100))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/images_settings/parts/resize_quality.twig";
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
/*  # Resising*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="30")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Input\\Text\\Integer', fieldName='resize_quality', value=this.getResizeQuality(), label='Image quality after resize', min=1, max=100) }}*/
