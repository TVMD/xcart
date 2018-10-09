<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/order/parts/spec.count.twig */
class __TwigTemplate_a8ad215d3f690c229490942ea738ab6811188fee85f19bf66fd66f8a5e3bf1bc extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"order-items-count\"><span class=\"order-spec-label order-items-count-label\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Items")), "html", null, true);
        echo ":</span><span class=\"order-spec-value order-items-count-value\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "countQuantity", array(), "method"), "html", null, true);
        echo "</span></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/order/parts/spec.count.twig";
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
/*  # Orders list item : spec : items count*/
/*  #*/
/*  # @ListChild (list="orders.children.spec", weight="600")*/
/*  #}*/
/* <li class="order-items-count"><span class="order-spec-label order-items-count-label">{{ t('Items') }}:</span><span class="order-spec-value order-items-count-value">{{ this.order.countQuantity() }}</span></li>*/
/* */
