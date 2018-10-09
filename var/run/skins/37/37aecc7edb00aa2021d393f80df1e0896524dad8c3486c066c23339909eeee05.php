<?php

/* /var/www/next/output/xcart/src/skins/admin/images_settings/parts/unsharp_mask.twig */
class __TwigTemplate_dafffc71f6fe359e18c43faf6e2d44224fa40a9ec85c18fdff36bc7b17d30da1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShowUnsharpOption", array(), "method")) {
            // line 8
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "fieldName" => "unsharp_mask_filter_on_resize", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getUnsharpMaskFilterOnResizeValue", array(), "method"), "label" => "Apply unsharp mask filter on resize"))), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/images_settings/parts/unsharp_mask.twig";
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
/*  # Unsharp mask filter on resize*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="35")*/
/*  #}*/
/* */
/* {% if this.isShowUnsharpOption() %}*/
/*   {{ widget('\\XLite\\View\\FormField\\Input\\Checkbox\\OnOff', fieldName='unsharp_mask_filter_on_resize', value=this.getUnsharpMaskFilterOnResizeValue(), label='Apply unsharp mask filter on resize') }}*/
/* {% endif %}*/
