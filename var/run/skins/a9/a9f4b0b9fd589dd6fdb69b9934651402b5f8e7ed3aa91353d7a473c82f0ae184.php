<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/item.amount.twig */
class __TwigTemplate_aa9fb871ea4f6a1b7f37b21a6462e21daffc885aa264b03d0faabcbff09222c5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"item-amount\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "html", null, true);
        echo " &times; </div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/mini_cart/horizontal/parts/item.amount.twig";
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
/*  # Display horizontal minicart item price*/
/*  #*/
/*  # @ListChild (list="minicart.horizontal.item", weight="18")*/
/*  #}*/
/* <div class="item-amount">{{ this.item.getAmount() }} &times; </div>*/
/* */
