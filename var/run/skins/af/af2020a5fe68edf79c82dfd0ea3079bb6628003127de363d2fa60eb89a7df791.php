<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-attributes-list.twig */
class __TwigTemplate_ecd8d1976e9c802ef503dcfa93aca3acdbb6eb108c9027be5c926d3ca9e4a71e extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesWidgets", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["aWidget"]) {
            // line 7
            echo "  ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["aWidget"], "display", array(), "method"), "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aWidget'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-attributes-list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product attributes*/
/*  #*/
/*  # @ListChild (list="product.details.common.product-attributes.attributes", weight="10")*/
/*  #}*/
/* {% for aWidget in this.getAttributesWidgets() %}*/
/*   {{ aWidget.display() }}*/
/* {% endfor %}*/
/* */
