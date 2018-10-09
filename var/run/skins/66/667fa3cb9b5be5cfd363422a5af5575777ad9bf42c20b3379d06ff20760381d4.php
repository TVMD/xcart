<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/place_order.button.twig */
class __TwigTemplate_d30d3d6c5371ace3dc57fc87325a8a734c2f392e6adfb84a9ce67d2b5ed73c80 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"button-row\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\PlaceOrder"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/place_order.button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Checkout : order review step : selected state : place order : button*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.placeOrder", weight="400")*/
/*  #}*/
/* */
/* <div class="button-row">*/
/*   {{ widget('\\XLite\\View\\Button\\PlaceOrder') }}*/
/* </div>*/
/* */
