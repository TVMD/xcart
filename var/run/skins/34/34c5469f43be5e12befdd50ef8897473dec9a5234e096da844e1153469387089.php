<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/SimpleCMS/page/parts/content.twig */
class __TwigTemplate_1f5f0b8cccd5bad6eac9a9066dfa2776e35f077c861f112ba6a47c73efaff372 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"page-body-content\" ";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "getFieldMetadata", array(0 => "body"), "method")), "method");
        echo ">";
        echo $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "page", array()), "getBody", array(), "method");
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/SimpleCMS/page/parts/content.twig";
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
/*  # Page content*/
/*  #*/
/*  # @ListChild (list="static_page.info", weight="100")*/
/*  #}*/
/* */
/* <div class="page-body-content" {{ this.printTagAttributes(this.page.getFieldMetadata('body'))|raw }}>{{ this.page.getBody()|raw }}</div>*/
/* */
