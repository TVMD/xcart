<?php

/* /var/www/next/output/xcart/src/skins/admin/images_settings/parts/lazy_load.twig */
class __TwigTemplate_a47d60505197f0ca69b1f5759754e76ac1cfbc0f816b7225c0d56805863fb168 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayLazyLoad", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "fieldName" => "use_lazy_load", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLazyLoadValue", array(), "method"), "label" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLazyLoadOptionName", array(), "method"), "help" => "Use images lazy load help"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/images_settings/parts/lazy_load.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Use dynamic image resizing setting*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="55")*/
/*  #}*/
/* */
/* {% if this.isDisplayLazyLoad() %}*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff', fieldName='use_lazy_load', value=this.getLazyLoadValue(), label=this.getLazyLoadOptionName(), help='Use images lazy load help') }}*/
/* {% endif %}*/
