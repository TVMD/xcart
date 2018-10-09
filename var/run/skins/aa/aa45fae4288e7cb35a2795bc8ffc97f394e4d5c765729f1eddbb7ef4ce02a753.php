<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/order/page/parts/shipping.d2po.twig */
class __TwigTemplate_4011453552ee1104e6e3c0bdd03b4e11942aa1ee50ecd106ba29d66c253b32c5 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCapostOffice", array(), "method")) {
            // line 8
            echo "  <div class=\"address\">
  
    <strong>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Delivery to Post Office")), "html", null, true);
            echo "</strong>
  
    <ul class=\"address-section shipping-address-section capost-d2po-section\">
  
      <li class=\"address-field\">
        <span class=\"address-field\">";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getName", array(), "method"), "html", null, true);
            echo "</span>
      </li>
  
      <li class=\"address-street address-field\">
        <span class=\"address-field\">";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getOfficeAddress", array(), "method"), "html", null, true);
            echo "</span>
        <span class=\"address-comma\">,</span>
      </li>
  
      <li class=\"address-city address-field\">
        <span class=\"address-field\">";
            // line 24
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getCity", array(), "method"), "html", null, true);
            echo "</span>
        <span class=\"address-comma\">,</span>
      </li>
  
      <li class=\"address-state address-field\">
        <span class=\"address-field\">";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getProvince", array(), "method"), "html", null, true);
            echo "</span>
        <span class=\"address-comma\">,</span>
      </li>
  
      <li class=\"address-zipcode address-field\">
        <span class=\"address-field\">";
            // line 34
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "capostOffice", array()), "getPostalCode", array(), "method"), "html", null, true);
            echo "</span>
      </li>
  
    </ul>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/CanadaPost/order/page/parts/shipping.d2po.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 34,  59 => 29,  51 => 24,  43 => 19,  36 => 15,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Canada Post delivery to post office section*/
/*  #*/
/*  # @ListChild (list="order.shipping", weight="250")*/
/*  #}*/
/* */
/* {% if this.order.getCapostOffice() %}*/
/*   <div class="address">*/
/*   */
/*     <strong>{{ t('Delivery to Post Office') }}</strong>*/
/*   */
/*     <ul class="address-section shipping-address-section capost-d2po-section">*/
/*   */
/*       <li class="address-field">*/
/*         <span class="address-field">{{ this.order.capostOffice.getName() }}</span>*/
/*       </li>*/
/*   */
/*       <li class="address-street address-field">*/
/*         <span class="address-field">{{ this.order.capostOffice.getOfficeAddress() }}</span>*/
/*         <span class="address-comma">,</span>*/
/*       </li>*/
/*   */
/*       <li class="address-city address-field">*/
/*         <span class="address-field">{{ this.order.capostOffice.getCity() }}</span>*/
/*         <span class="address-comma">,</span>*/
/*       </li>*/
/*   */
/*       <li class="address-state address-field">*/
/*         <span class="address-field">{{ this.order.capostOffice.getProvince() }}</span>*/
/*         <span class="address-comma">,</span>*/
/*       </li>*/
/*   */
/*       <li class="address-zipcode address-field">*/
/*         <span class="address-field">{{ this.order.capostOffice.getPostalCode() }}</span>*/
/*       </li>*/
/*   */
/*     </ul>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
