<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/purchaser.address.billing.twig */
class __TwigTemplate_a41f042fab8a9e85dac4780af466d081b60e5cfb7c6b2dc6fe5f215ee7e842e5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<h2 class=\"title\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Bill to")), "html", null, true);
        echo "</h2>
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
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/purchaser.address.billing.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  38 => 11,  34 => 10,  29 => 9,  25 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice billing address*/
/*  #*/
/*  # @ListChild (list="packing_slip.addresses.billing", weight="10")*/
/*  #}*/
/* <h2 class="title">{{ t('Bill to') }}</h2>*/
/* <ul class="address-section billing-address-section">*/
/*   {% for idx, field in this.getAddressSectionData(this.baddress) %}*/
/*     <li class="{{ field.css_class }} address-field">*/
/*       <span class="address-title">{{ t(field.title) }}:</span>*/
/*       <span class="address-field">{{ field.value }}</span>*/
/*       <span class="address-comma">,</span>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
