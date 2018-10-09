<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/billing/same.twig */
class __TwigTemplate_44aa11f26219e4182b11dcb48a72a5ef7095e6ddd9c77182d8cc5dd9aaa947bf extends \XLite\Core\Templating\Twig\Template
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
        $context["visibility"] = (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSameAddressVisible", array(), "method")) ? ("") : ("hidden"));
        // line 8
        echo "
<div class=\"checkout_fastlane_block_same_address ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, (isset($context["visibility"]) ? $context["visibility"] : null), "html", null, true);
        echo "\">
  <div class=\"checkbox\">
      <label>
        <input id=\"same_address\" type=\"checkbox\" name=\"same_address\" value=\"1\" v-model=\"same_address\" v-bind:true-value=\"1\" v-bind:false-value=\"0\" ";
        // line 12
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSameAddress", array(), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
        ";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("The same as shipping")), "html", null, true);
        echo "
      </label>
  </div>
  <p class=\"help-text\">";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enable this if you would like us to use your shipping address as your billing address")), "html", null, true);
        echo "</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/billing/same.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 16,  39 => 13,  33 => 12,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout address section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.blocks.address.billing.before", weight="10")*/
/*  #}*/
/* */
/* {% set visibility = this.isSameAddressVisible() ? '' : 'hidden' %}*/
/* */
/* <div class="checkout_fastlane_block_same_address {{ visibility }}">*/
/*   <div class="checkbox">*/
/*       <label>*/
/*         <input id="same_address" type="checkbox" name="same_address" value="1" v-model="same_address" v-bind:true-value="1" v-bind:false-value="0" {% if this.isSameAddress() %} checked="checked" {% endif %} />*/
/*         {{ t('The same as shipping') }}*/
/*       </label>*/
/*   </div>*/
/*   <p class="help-text">{{ t('Enable this if you would like us to use your shipping address as your billing address') }}</p>*/
/* </div>*/
/* */
