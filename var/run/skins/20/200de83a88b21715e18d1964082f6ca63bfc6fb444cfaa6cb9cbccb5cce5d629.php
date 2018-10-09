<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header/title.twig */
class __TwigTemplate_f9484bd7466095d982d75f489b024db7ddaf8398a99da8eeb49d93b79434a5e2 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"checkout_fastlane_title\">
  <h2>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSecondaryTitle", array(), "method"), "html", null, true);
        echo "</h2>
  <h1>";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"), "html", null, true);
        echo "</h1>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/checkout_fastlane/header/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout heading bar*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.header.left", weight="10")*/
/*  #}*/
/* */
/* <div class="checkout_fastlane_title">*/
/*   <h2>{{ this.getSecondaryTitle() }}</h2>*/
/*   <h1>{{ this.getTitle() }}</h1>*/
/* </div>*/
