<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details/market_price.twig */
class __TwigTemplate_1390b65dd2231ab1620bb5d758cdf111c40fcf4fc2c162085b55ebd76547d289 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Market price")), "html", null, true);
        echo ": <span class=\"value\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getMarketPrice", array(), "method"), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "null", array()), 2 => 1), "method"), "html", null, true);
        echo "</span>,
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details/market_price.twig";
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
/*  # Market price (internal list element)*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail.market_price.text", weight="100")*/
/*  #}*/
/* */
/* {{ t('Market price') }}: <span class="value">{{ this.formatPrice(this.product.getMarketPrice(), this.null, 1) }}</span>,*/
/* */
