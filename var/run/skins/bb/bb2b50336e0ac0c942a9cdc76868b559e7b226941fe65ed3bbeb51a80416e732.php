<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/customerNotes.twig */
class __TwigTemplate_f550f91329d6e15acd87934641ab619d1b17b50022af6d3621b06d11a599291c extends \XLite\Core\Templating\Twig\Template
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
<div class=\"order-note customer-notes\">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Customer note")), "html", null, true);
        echo "</h3>
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "orderForm", array()), "displayComplexField", array(0 => "customerNote"), "method"), "html", null, true);
        echo "
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.customerNotes"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/customerNotes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Order : customer notes box*/
/*  #*/
/*  # @ListChild (list="order.items.bottom", weight="200")*/
/*  #}*/
/* */
/* <div class="order-note customer-notes">*/
/*   <h3>{{ t('Customer note') }}</h3>*/
/*   {{ this.orderForm.displayComplexField('customerNote') }}*/
/*   {{ widget_list('order.customerNotes') }}*/
/* </div>*/
/* */
