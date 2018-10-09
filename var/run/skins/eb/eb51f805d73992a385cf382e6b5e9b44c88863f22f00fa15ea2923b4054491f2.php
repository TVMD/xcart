<?php

/* /var/www/next/output/xcart/src/skins/customer/order/parts/status.shipping.twig */
class __TwigTemplate_ac2d1f81831ae412d9f4dc8eaff3e348ad01ce656d088cd64f6926da5e9e8cac extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"shipping order-status-";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getShippingStatusCode", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\OrderStatus\\Shipping", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrder", array(), "method"), "useWrapper" => "true"))), "html", null, true);
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/parts/status.shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Order shipping status*/
/*  #*/
/*  # @ListChild (list="order.status", weight="20")*/
/*  #}*/
/* <div class="shipping order-status-{{ this.order.getShippingStatusCode() }}">{{ widget('\\XLite\\View\\OrderStatus\\Shipping', order=this.getOrder(), useWrapper='true') }}</div>*/
/* */
