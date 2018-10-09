<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details.twig */
class __TwigTemplate_e6f32920d77a4940569b22bac01a7308e5f3d4a7c27d5a9d321d7784d1ac8516 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isShowMarketPrice", array(), "method")) {
            // line 8
            echo "  <div class=\"product-details-market-price\">
    <div class=\"text\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "market_price.text", "type" => "nested"))), "html", null, true);
            echo "
    </div>
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "market_price.label", "type" => "nested"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product market price*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail", weight="45")*/
/*  #}*/
/* */
/* {% if this.isShowMarketPrice() %}*/
/*   <div class="product-details-market-price">*/
/*     <div class="text">*/
/*       {{ widget_list('market_price.text', type='nested') }}*/
/*     </div>*/
/*     {{ widget_list('market_price.label', type='nested') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
