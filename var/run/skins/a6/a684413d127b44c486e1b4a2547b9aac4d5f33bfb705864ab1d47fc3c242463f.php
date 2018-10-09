<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/QSL/BraintreeVZ/invoice/credit_card.twig */
class __TwigTemplate_2e5c4975347e448cbea066a1ef6ddc8b4269e37e33766bdbca66c8116588b015 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeTransaction", array(), "method")) {
            // line 9
            echo "  <div class=\"braintree-credit-card\">
    <strong class=\"method-title\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Credit card")), "html", null, true);
            echo "</strong>
    <img src=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeCardLogo", array(), "method"), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeCardType", array(), "method"), "html", null, true);
            echo "\" />
    <span>";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeCardNumber", array(), "method"), "html", null, true);
            echo "</span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/QSL/BraintreeVZ/invoice/credit_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  31 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Credit cards on the invoice*/
/*  #*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.address.billing", weight="30")*/
/*  #}*/
/* */
/* {% if this.getBraintreeTransaction() %}*/
/*   <div class="braintree-credit-card">*/
/*     <strong class="method-title">{{ t('Credit card') }}</strong>*/
/*     <img src="{{ this.getBraintreeCardLogo() }}" alt="{{ this.getBraintreeCardType() }}" />*/
/*     <span>{{ this.getBraintreeCardNumber() }}</span>*/
/*   </div>*/
/* {% endif %}*/
/* */
