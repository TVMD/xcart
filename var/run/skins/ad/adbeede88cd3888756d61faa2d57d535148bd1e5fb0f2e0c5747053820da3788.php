<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/place_order.twig */
class __TwigTemplate_af56f2a0e9d8daa4fc1ddd05bbf84583e0ec4783d3ed41c85584722377991419 extends \XLite\Core\Templating\Twig\Template
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
        $this->startForm("\\XLite\\View\\Form\\Checkout\\Place", array("className" => "place"));        // line 7
        echo "
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.review.selected.placeOrder"))), "html", null, true);
        echo "

";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/place_order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  20 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Checkout : order review step : selected state : button*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected", weight="20")*/
/*  #}*/
/* {% form '\\XLite\\View\\Form\\Checkout\\Place' with {className: 'place'} %}*/
/* */
/*   {{ widget_list('checkout.review.selected.placeOrder') }}*/
/* */
/* {% endform %}*/
/* */
