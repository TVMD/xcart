<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/subsection.payment.twig */
class __TwigTemplate_f656ec448e470824a0df400915628cd4132f80b6a31a730de771659f06d3b64e extends \XLite\Core\Templating\Twig\Template
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
<div class=\"subsection payment-section\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.shipping.selected.sub.payment"))), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/subsection.payment.twig";
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
/*  # Checkout : shipping step : selected state : shipping subsection*/
/*  #*/
/*  # @ListChild (list="checkout.shipping.selected", weight="200")*/
/*  #}*/
/* */
/* <div class="subsection payment-section">*/
/*   {{ widget_list('checkout.shipping.selected.sub.payment') }}*/
/* </div>*/
/* */
/* */
