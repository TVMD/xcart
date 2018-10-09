<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/QSL/BraintreeVZ/config/status.twig */
class __TwigTemplate_0227db061d3d782d380585741ea621d771b39774f6515c3ead66ba7a1d715c63 extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "
";
        // line 6
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "paymentMethod", array()), "getSetting", array(0 => "merchantId"), "method")) {
            // line 7
            echo "  <strong>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Merchant ID")), "html", null, true);
            echo ":</strong> <span id=\"braintree-merchant-id\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "paymentMethod", array()), "getSetting", array(0 => "merchantId"), "method"), "html", null, true);
            echo "</span>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/QSL/BraintreeVZ/config/status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 7,  22 => 6,  19 => 5,);
    }
}
/* {##*/
/*  # Braintree merchant ID in the payment status panel*/
/*  # @ListChild (list="payment_status.after.PayPal_powered_by_Braintree", weight="20")*/
/*  #}*/
/* */
/* {% if (this.paymentMethod.getSetting('merchantId')) %}*/
/*   <strong>{{ t('Merchant ID') }}:</strong> <span id="braintree-merchant-id">{{ this.paymentMethod.getSetting('merchantId') }}</span>*/
/* {% endif %}*/
/* */
