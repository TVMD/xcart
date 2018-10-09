<?php

/* /var/www/next/output/xcart/src/skins/admin/address/order/parts/billing.twig */
class __TwigTemplate_e6155f229cab46196819a8a718ab1e2a4e428bc13ba33d34dbff38a2c4b44922 extends \XLite\Core\Templating\Twig\Template
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
<div ";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBillingContainerAttributes", array(), "method")), "method");
        echo ">
  <h3>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Billing address")), "html", null, true);
        echo "</h3>
  <div class=\"expander\"><a href=\"#\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Show")), "html", null, true);
        echo "</a></div>
  <div class=\"collapser\"><a href=\"#\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Hide")), "html", null, true);
        echo "</a></div>
  ";
        // line 11
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayAddressButton", array(), "method")) {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\SimpleLink", "label" => "Address book", "style" => "btn regular-button address-book", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order", "", array("order_number" => $this->getAttribute($this->getAttribute(            // line 15
(isset($context["this"]) ? $context["this"] : null), "order", array()), "orderNumber", array()), "atype" => "b", "widget" => "XLite\\View\\SelectAddressOrder")))))), "html", null, true);
            // line 16
            echo "
  ";
        }
        // line 18
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Model\\Address\\Order", "template" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getModelTemplate", array(), "method"), "addressType" => "billing"))), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/address/order/parts/billing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 18,  44 => 16,  42 => 15,  40 => 12,  38 => 11,  34 => 10,  30 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order address : billing*/
/*  #*/
/*  # @ListChild (list="address.order.main", weight="200")*/
/*  #}*/
/* */
/* <div {{ this.printTagAttributes(this.getBillingContainerAttributes())|raw }}>*/
/*   <h3>{{ t('Billing address') }}</h3>*/
/*   <div class="expander"><a href="#">{{ t('Show') }}</a></div>*/
/*   <div class="collapser"><a href="#">{{ t('Hide') }}</a></div>*/
/*   {% if this.isDisplayAddressButton() %}*/
/*     {{ widget('XLite\\View\\Button\\SimpleLink',*/
/*       label='Address book',*/
/*       style='btn regular-button address-book',*/
/*       location=url('order', '', {'order_number': this.order.orderNumber, 'atype': 'b', 'widget': 'XLite\\View\\SelectAddressOrder'})*/
/*     ) }}*/
/*   {% endif %}*/
/*   {{ widget('XLite\\View\\Model\\Address\\Order', template=this.getModelTemplate(), addressType='billing') }}*/
/* </div>*/
/* */
/* */
