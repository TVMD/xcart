<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/layout_options.twig */
class __TwigTemplate_48682c00127c14b984a06a3e5d4e26c19832e418ad4f19a582308f97ac9cf833 extends \XLite\Core\Templating\Twig\Template
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
<script>
  var xliteLayoutOptions = {
    cloud_zoom: ";
        // line 9
        echo (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isCloudZoomAllowed", array(), "method")) ? ("true") : ("false"));
        echo ",
    lazy_load: ";
        // line 10
        echo (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "layout", array()), "isLazyLoadEnabled", array(), "method")) ? ("true") : ("false"));
        echo ",
  };
</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/layout_options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Head list children*/
/*  #*/
/*  # @ListChild (list="head", weight="1310")*/
/*  #}*/
/* */
/* <script>*/
/*   var xliteLayoutOptions = {*/
/*     cloud_zoom: {{ this.layout.isCloudZoomAllowed() ? 'true' : 'false' }},*/
/*     lazy_load: {{ this.layout.isLazyLoadEnabled() ? 'true' : 'false' }},*/
/*   };*/
/* </script>*/
/* */
