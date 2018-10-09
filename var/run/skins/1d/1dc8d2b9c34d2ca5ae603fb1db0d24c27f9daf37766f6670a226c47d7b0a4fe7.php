<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/order/invoice/parts/bottom.d2po.details.twig */
class __TwigTemplate_83abe1a53af6064e0d4c59f49bc0240921a0f8f48c385aab9a40d0545ad5d397 extends \XLite\Core\Templating\Twig\Template
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
<strong>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delivery to Post Office")), "html", null, true);
        echo "</strong>

<ul class=\"address-section capost-d2po-section\">
  <li class=\"address-field\">";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getName", array(), "method"), "html", null, true);
        echo "</li>
  <li class=\"address-street address-field\">";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getOfficeAddress", array(), "method"), "html", null, true);
        echo ",</li>
  <li class=\"address-city address-field\">";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getCity", array(), "method"), "html", null, true);
        echo ",</li>
  <li class=\"address-state address-field\">";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getProvince", array(), "method"), "html", null, true);
        echo ",</li>
  <li class=\"address-zipcode address-field\">";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getPostalCode", array(), "method"), "html", null, true);
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/order/invoice/parts/bottom.d2po.details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 14,  40 => 13,  36 => 12,  32 => 11,  28 => 10,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post post office details*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.d2po", weight="10")*/
/*  #}*/
/* */
/* <strong>{{ t('Delivery to Post Office') }}</strong>*/
/* */
/* <ul class="address-section capost-d2po-section">*/
/*   <li class="address-field">{{ this.order.capostOffice.getName() }}</li>*/
/*   <li class="address-street address-field">{{ this.order.capostOffice.getOfficeAddress() }},</li>*/
/*   <li class="address-city address-field">{{ this.order.capostOffice.getCity() }},</li>*/
/*   <li class="address-state address-field">{{ this.order.capostOffice.getProvince() }},</li>*/
/*   <li class="address-zipcode address-field">{{ this.order.capostOffice.getPostalCode() }}</li>*/
/* </ul>*/
/* */
