<?php

/* /var/www/next/output/xcart/src/skins/admin/images_settings/parts/resize_images.twig */
class __TwigTemplate_3c537f8c6d4f4e463d0e180e8a844da9d0aafd14385d2cffd7a61e5637c614f0 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "fieldName" => "use_dynamic_image_resizing", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUseDynamicImageResizingValue", array(), "method"), "label" => "Use dynamic image resizing", "help" => "Use dynamic image help"))), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/images_settings/parts/resize_images.twig";
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
/*  # Use dynamic image resizing setting*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="20")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff', fieldName='use_dynamic_image_resizing', value=this.getUseDynamicImageResizingValue(), label='Use dynamic image resizing', help='Use dynamic image help') }}*/
