<?php

/* /var/www/next/output/xcart/src/skins/admin/images_settings/parts/layout_settings.cloud_zoom.twig */
class __TwigTemplate_efa33ca8c02bfbe0f6195245a302db0c5c8c61a85196234378bfd9b03b86b3d3 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCloudZoomAllowed", array(), "method")) {
            // line 8
            echo "<div class=\"cloud-zoom-switch\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Input\\Checkbox\\OnOff", "label" => "Cloud Zoom", "fieldName" => "cloud_zoom", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCloudZoomEnabled", array(), "method")))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/images_settings/parts/layout_settings.cloud_zoom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Cloud zoom switcher*/
/*  #*/
/*  # @ListChild (list="images_settings", weight="40")*/
/*  #}*/
/* */
/* {% if this.isCloudZoomAllowed() %}*/
/* <div class="cloud-zoom-switch">*/
/*     {{ widget('XLite\\View\\FormField\\Input\\Checkbox\\OnOff', label='Cloud Zoom', fieldName='cloud_zoom', value=this.getCloudZoomEnabled()) }}*/
/* </div>*/
/* {% endif %}*/
/* */
