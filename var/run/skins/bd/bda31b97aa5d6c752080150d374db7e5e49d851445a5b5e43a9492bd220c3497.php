<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/order/refund_in_progress.twig */
class __TwigTemplate_f1d1cf3d3e41ee78fa875a7fa779322fab8a78a2ac59825f189fdd8e8f6593a1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRefundInProgress", array(), "method")) {
            // line 8
            echo "  <div class=\"ppa-refund-status\">
    <span>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Refund status:")), "html", null, true);
            echo "</span>
    <span class=\"status-name\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("[BT] In progress")), "html", null, true);
            echo "</span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/order/refund_in_progress.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment transactions summary*/
/*  #*/
/*  # @ListChild (list="order.actions.paymentActionsRow", weight="100")*/
/*  #}*/
/* */
/* {% if this.isRefundInProgress() %}*/
/*   <div class="ppa-refund-status">*/
/*     <span>{{ t('Refund status:') }}</span>*/
/*     <span class="status-name">{{ t('[BT] In progress') }}</span>*/
/*   </div>*/
/* {% endif %}*/
/* */
