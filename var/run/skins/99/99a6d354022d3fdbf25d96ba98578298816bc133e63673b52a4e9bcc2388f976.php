<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/model/table/order/cell.payment_actions.twig */
class __TwigTemplate_1540398d7f326605c8a91c634f55c04fed68eaad7bced59606106b0ae694ae3a extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "hasPaymentActions", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method")) {
            // line 8
            echo "  <div class=\"payment-actions\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Order\\Details\\Admin\\PaymentActions", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "unitsFilter" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTransactionsFilter", array(), "method")))), "html", null, true);
            echo "
  </div>
";
        }
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/model/table/order/cell.payment_actions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Cell actions*/
/*  #*/
/*  # @ListChild (list="itemsList.orders.search.cell.status")*/
/*  #}*/
/* */
/* {% if this.hasPaymentActions(this.entity) %}*/
/*   <div class="payment-actions">*/
/*     {{ widget('\\XLite\\View\\Order\\Details\\Admin\\PaymentActions', order=this.entity, unitsFilter=this.getTransactionsFilter()) }}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* */
