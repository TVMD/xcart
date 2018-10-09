<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.address.billing.twig */
class __TwigTemplate_bbdb3c7f2bd0ce91443711108fb7654b499ff09e1f306fece4b2e6eadbbc9332 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Billing address")), "html", null, true);
        echo "</strong>
<ul class=\"address-section billing-address-section\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressSectionData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "baddress", array())), "method"));
        foreach ($context['_seq'] as $context["idx"] => $context["field"]) {
            // line 9
            echo "    <li class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "css_class", array()), "html", null, true);
            echo " address-field\">
      <span class=\"address-title\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute($context["field"], "title", array()))), "html", null, true);
            echo ":</span>
      <span class=\"address-field\">";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["field"], "value", array()), "html", null, true);
            echo "</span>
      <span class=\"address-comma\">,</span>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['idx'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</ul>
";
        // line 16
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayBillingEmail", array(), "method")) {
            // line 17
            echo "    <p class=\"email\">";
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
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/bottom.address.billing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 17,  51 => 16,  48 => 15,  38 => 11,  34 => 10,  29 => 9,  25 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice billing address*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.address.billing", weight="10")*/
/*  #}*/
/* <strong class="title">{{ t('Billing address') }}</strong>*/
/* <ul class="address-section billing-address-section">*/
/*   {% for idx, field in this.getAddressSectionData(this.baddress) %}*/
/*     <li class="{{ field.css_class }} address-field">*/
/*       <span class="address-title">{{ t(field.title) }}:</span>*/
/*       <span class="address-field">{{ field.value }}</span>*/
/*       <span class="address-comma">,</span>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* {% if this.isDisplayBillingEmail() %}*/
/*     <p class="email">{{ t('E-mail') }}: <a href="mailto:{{ this.order.profile.email }}">{{ this.order.profile.email }}</a></p>*/
/* {% endif %}*/
/* */
