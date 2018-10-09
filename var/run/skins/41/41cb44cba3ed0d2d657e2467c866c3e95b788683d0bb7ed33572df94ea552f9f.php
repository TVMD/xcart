<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/item.image.twig */
class __TwigTemplate_911d7eca669e26572c1589ff9fce04447fdc4c12aac69f2c28e2a191868d147c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "hasImage", array(), "method")) {
            // line 8
            echo "\t<span class=\"item-image\"><img src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getImageURL", array(), "method"), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
            echo "\" /></span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/item.image.twig";
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
/*  # Display horizontal minicart item name*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.item", weight="5")*/
/*  #}*/
/* */
/* {% if this.item.hasImage() %}*/
/* 	<span class="item-image"><img src="{{ this.item.getImageURL() }}" alt="{{ this.item.getName() }}" /></span>*/
/* {% endif %}*/
