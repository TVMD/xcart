<?php

/* items_list/product/parts/common.product-name.twig */
class __TwigTemplate_d53f16a14181bfd735217945a1b259a169bfdcb8a8ca024a822138214fa3a9ff extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        ob_start();
        // line 5
        echo "<h5 class=\"product-name\">
    <a class=\"fn url\" href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array()), "html", null, true);
        echo "</a>
</h5>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "items_list/product/parts/common.product-name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 6,  21 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Item name*/
/*  #}*/
/* {% spaceless %}*/
/* <h5 class="product-name">*/
/*     <a class="fn url" href="{{ this.getProductURL(this.categoryId) }}">{{ this.product.name }}</a>*/
/* </h5>*/
/* {% endspaceless %}*/
/* */
