<?php

/* /var/www/next/output/xcart/src/skins/admin/images_settings/parts/layout_settings.cloud_zoom_mode.twig */
class __TwigTemplate_fdf9f94ed6c59d963423bd8c1fd0e5d6d7c83a3184dc046cc8351d9721917089 extends \XLite\Core\Templating\Twig\Template
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
            echo "<div class=\"cloud-zoom-mode-switch\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\FormField\\Select\\CloudZoomMode", "label" => "Cloud Zoom mode", "fieldName" => "cloud_zoom_mode", "value" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCloudZoomMode", array(), "method")))), "html", null, true);
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/images_settings/parts/layout_settings.cloud_zoom_mode.twig";
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
/*  # @ListChild (list="images_settings", weight="50")*/
/*  #}*/
/* */
/* {% if this.isCloudZoomAllowed() %}*/
/* <div class="cloud-zoom-mode-switch">*/
/*     {{ widget('XLite\\View\\FormField\\Select\\CloudZoomMode', label='Cloud Zoom mode', fieldName='cloud_zoom_mode', value=this.getCloudZoomMode()) }}*/
/* </div>*/
/* {% endif %}*/
/* */
