<?php

/* /var/www/next/output/xcart/src/skins/admin/welcome_block/root_admin/block.items.twig */
class __TwigTemplate_29054a37f757e0c029e138658ad94fe9b4948e256075e5305f8fea3ae2937ca4 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"step-items\">
  <ul>
    <li class=\"item-store\">";
        // line 9
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Specify your _store information_", array("URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "settings", "", array("page" => "Company"))))));
        echo "</li>
    <li class=\"item-products\">";
        // line 10
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add your _products_", array("URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product_list")))));
        echo "</li>
    <li class=\"item-taxes\">";
        // line 11
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Setup _address zones_ and _taxes_", array("URL1" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "zones")), "URL2" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTaxesURL", array(), "method"))));
        echo "</li>
    <li class=\"item-shipping\">";
        // line 12
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Configure _shipping methods_", array("URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "shipping_methods")))));
        echo "</li>
    <li class=\"item-payment\">";
        // line 13
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Choose _payment methods_", array("URL" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "payment_settings")))));
        echo "</li>
    ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "admin-welcome-items"))), "html", null, true);
        echo "
  </ul>
</div>


";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/welcome_block/root_admin/block.items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  36 => 12,  32 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Block content : items*/
/*  #*/
/*  # @ListChild (list="welcome-block.root.content", weight="10")*/
/*  #}*/
/* */
/* <div class="step-items">*/
/*   <ul>*/
/*     <li class="item-store">{{ t('Specify your _store information_', {'URL': url('settings', '', {'page': 'Company'})})|raw }}</li>*/
/*     <li class="item-products">{{ t('Add your _products_', {'URL': url('product_list')})|raw }}</li>*/
/*     <li class="item-taxes">{{ t('Setup _address zones_ and _taxes_', {'URL1': url('zones'), 'URL2': this.getTaxesURL()})|raw }}</li>*/
/*     <li class="item-shipping">{{ t('Configure _shipping methods_', {'URL': url('shipping_methods')})|raw }}</li>*/
/*     <li class="item-payment">{{ t('Choose _payment methods_', {'URL': url('payment_settings')})|raw }}</li>*/
/*     {{ widget_list('admin-welcome-items') }}*/
/*   </ul>*/
/* </div>*/
/* */
/* */
/* */
