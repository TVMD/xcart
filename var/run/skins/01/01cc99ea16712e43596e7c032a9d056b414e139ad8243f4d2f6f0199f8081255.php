<?php

/* /var/www/next/output/xcart/src/skins/customer/mini_cart/horizontal/parts/item.name.twig */
class __TwigTemplate_d8786d7e29d2e2d9ea6fa88d59171f4e51de04d7ab93cc45b595aaaea89b660c extends \XLite\Core\Templating\Twig\Template
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
        echo "<span class=\"item-name\"><a href=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/mini_cart/horizontal/parts/item.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Display horizontal minicart item name*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.item", weight="10")*/
/*  #}*/
/* <span class="item-name"><a href="{{ this.item.getURL() }}">{{ this.item.getName() }}</a></span>*/
/* */
