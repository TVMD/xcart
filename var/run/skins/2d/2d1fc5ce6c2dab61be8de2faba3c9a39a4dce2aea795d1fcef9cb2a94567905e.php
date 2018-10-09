<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/place_order.note.twig */
class __TwigTemplate_20cbe5edeb18947a69491f9863d44c8f211e3484025b4f17fb240a3be74988b6 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"notes\">
  <label for=\"place_order_note\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Customer note")), "html", null, true);
        echo ":</label>
  <textarea name=\"notes\" id=\"place_order_note\" class=\"form-control\"></textarea>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/place_order.note.twig";
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
/*  # Checkout : order review step : selected state : place order : order note*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.placeOrder", weight="200")*/
/*  #}*/
/* */
/* <div class="notes">*/
/*   <label for="place_order_note">{{ t('Customer note') }}:</label>*/
/*   <textarea name="notes" id="place_order_note" class="form-control"></textarea>*/
/* </div>*/
/* */
