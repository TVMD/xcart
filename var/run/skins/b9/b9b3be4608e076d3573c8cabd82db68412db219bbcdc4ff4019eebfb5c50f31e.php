<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.address.shipping.twig */
class __TwigTemplate_c917ea2d1b6e126cd9fad872235aa72b19e5c19913c906bdf7dc3eddd0b8f4f7 extends \XLite\Core\Templating\Twig\Template
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
        echo "<strong class=\"title\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Shipping address")), "html", null, true);
        echo "</strong>

<ul class=\"address-section shipping-address-section\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressSectionData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "saddress", array())), "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["field"]) {
            // line 10
            echo "    <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "css_class", array()), "html", null, true);
            echo " address-field\">
      <span class=\"address-title\">";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["field"], "title", array()))), "html", null, true);
            echo ":</span>
      <span class=\"address-field\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "value", array()), "html", null, true);
            echo "</span>
      <span class=\"address-comma\">,</span>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "</ul>
";
        // line 17
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayShippingEmail", array(), "method")) {
            // line 18
            echo "  <p class=\"email\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("E-mail")), "html", null, true);
            echo ": <a href=\"mailto:";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "email", array()), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "profile", array()), "email", array()), "html", null, true);
            echo "</a></p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.address.shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  52 => 17,  49 => 16,  39 => 12,  35 => 11,  30 => 10,  26 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice shipping address*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.address.shipping", weight="20")*/
/*  #}*/
/* <strong class="title">{{ t('Shipping address') }}</strong>*/
/* */
/* <ul class="address-section shipping-address-section">*/
/*   {% for idx, field in this.getAddressSectionData(this.saddress) %}*/
/*     <li class="{{ field.css_class }} address-field">*/
/*       <span class="address-title">{{ t(field.title) }}:</span>*/
/*       <span class="address-field">{{ field.value }}</span>*/
/*       <span class="address-comma">,</span>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if this.isDisplayShippingEmail() %}*/
/*   <p class="email">{{ t('E-mail') }}: <a href="mailto:{{ this.order.profile.email }}">{{ this.order.profile.email }}</a></p>*/
/* {% endif %}*/
/* */
