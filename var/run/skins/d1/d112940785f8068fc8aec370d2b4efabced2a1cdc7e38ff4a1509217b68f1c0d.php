<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/order/parts/spec.total.twig */
class __TwigTemplate_c1db2c9916960b0d1b5b52d46394ab4a38ba958607b3ed8abd194b8989a7740f extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"order-total\"><span class=\"order-spec-label total-label\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Total")), "html", null, true);
        echo ":</span><span class=\"order-spec-value total-value\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatOrderPrice", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getTotal", array(), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCurrency", array(), "method"), 2 => 1), "method"), "html", null, true);
        echo "</span></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/order/parts/spec.total.twig";
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
/*  # Orders list item : spec : total*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="500")*/
/*  #}*/
/* <li class="order-total"><span class="order-spec-label total-label">{{ t('Total') }}:</span><span class="order-spec-value total-value">{{ this.formatOrderPrice(this.order.getTotal(), this.order.getCurrency(), 1) }}</span></li>*/
/* */
