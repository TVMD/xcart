<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/QSL/BraintreeVZ/order/credit_card.twig */
class __TwigTemplate_53d35ec8a78bc1ea79c0404deab9b4fad7ce68eec87665fe606b75f2c0c2baf0 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeTransaction", array(), "method")) {
            // line 8
            echo "  <div class=\"braintree-credit-card\">
    <strong>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Credit card")), "html", null, true);
            echo "</strong>
    <br />
    <div style=\"white-space: nowrap\">
      <img src=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeCardLogo", array(), "method"), "html", null, true);
            echo "\" alt=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeCardType", array(), "method"), "html", null, true);
            echo "\" class=\"card-logo\" />
      <span class=\"card-number\">";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBraintreeCardNumber", array(), "method"), "html", null, true);
            echo "</span>
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/QSL/BraintreeVZ/order/credit_card.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Braintree used credit card */
/*  #*/
/*  # @ListChild (list="order.payment", weight="120")*/
/*  #}*/
/* */
/* {% if this.getBraintreeTransaction() %}*/
/*   <div class="braintree-credit-card">*/
/*     <strong>{{ t('Credit card') }}</strong>*/
/*     <br />*/
/*     <div style="white-space: nowrap">*/
/*       <img src="{{ this.getBraintreeCardLogo() }}" alt="{{ this.getBraintreeCardType() }}" class="card-logo" />*/
/*       <span class="card-number">{{ this.getBraintreeCardNumber() }}</span>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
