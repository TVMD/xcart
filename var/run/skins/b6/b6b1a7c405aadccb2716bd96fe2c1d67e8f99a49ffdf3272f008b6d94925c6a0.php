<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/line1.twig */
class __TwigTemplate_b19cdbd7275e3e1c4f90eaa1947097882a3d797646e5b80185f2b284e9809185 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"line-1 clearfix\">

  ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isPaymentSectionVisible", array(), "method")) {
            // line 10
            echo "    <div class=\"order-part payment\">
      <h2>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Payment method")), "html", null, true);
            echo ":</h2>
      <div class=\"box\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.payment"))), "html", null, true);
            echo "</div>
    </div>
  ";
        }
        // line 15
        echo "
  ";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "isShippingSectionVisible", array(), "method")) {
            // line 17
            echo "    <div class=\"order-part shipping\">
      <h2>";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping method")), "html", null, true);
            echo ":</h2>
      <div class=\"box\">";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.shipping"))), "html", null, true);
            echo "</div>
    </div>
  ";
        }
        // line 22
        echo "
  <div class=\"actions\">
    ";
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.actions"))), "html", null, true);
        echo "
  </div>

<!--
  <div class=\"note\">
    <list name=\"order.note\" />
  </div>
  <div class=\"clear\"></div>
-->
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/line1.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  57 => 22,  51 => 19,  47 => 18,  44 => 17,  42 => 16,  39 => 15,  33 => 12,  29 => 11,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Order : line 1*/
/*  #*/
/*  # @ListChild (list="order.operations", weight="100")*/
/*  #}*/
/* */
/* <div class="line-1 clearfix">*/
/* */
/*   {% if this.order.isPaymentSectionVisible() %}*/
/*     <div class="order-part payment">*/
/*       <h2>{{ t('Payment method') }}:</h2>*/
/*       <div class="box">{{ widget_list('order.payment') }}</div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   {% if this.order.isShippingSectionVisible() %}*/
/*     <div class="order-part shipping">*/
/*       <h2>{{ t('Shipping method') }}:</h2>*/
/*       <div class="box">{{ widget_list('order.shipping') }}</div>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <div class="actions">*/
/*     {{ widget_list('order.actions') }}*/
/*   </div>*/
/* */
/* <!--*/
/*   <div class="note">*/
/*     <list name="order.note" />*/
/*   </div>*/
/*   <div class="clear"></div>*/
/* -->*/
/* </div>*/
/* */
