<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/sales_channels/items_list/list.twig */
class __TwigTemplate_3d9294c9ced1cfa451fc8b6a015d3ba61c73a363f6eabd3c069340d7d76b38c1 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Module\\Install");        // line 7
        echo "  <div class=\"marketplace-wrapper";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLandingPage", array(), "method")) {
            echo " marketplace-landing";
        }
        echo "\">
    ";
        $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(        // line 8
(isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"));        list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
        if ($templateWrapperText) {
echo $templateWrapperStart;
}

        $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBody", array(), "method"), "/var/www/next/output/xcart/src/skins/admin/items_list/module/sales_channels/items_list/list.twig", 8)->display($context);
        if ($templateWrapperText) {
            echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
        }
        // line 9
        echo "  </div>
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/sales_channels/items_list/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 9,  27 => 8,  20 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Modules list*/
/*  #*/
/*  # @ListChild (list="sales-channels.top-controls", weight="400")*/
/*  #}*/
/* {% form '\\XLite\\View\\Form\\Module\\Install' %}*/
/*   <div class="marketplace-wrapper{% if this.isLandingPage() %} marketplace-landing{% endif %}">*/
/*     {% include this.getBody() %}*/
/*   </div>*/
/* {% endform %}*/
/* */
