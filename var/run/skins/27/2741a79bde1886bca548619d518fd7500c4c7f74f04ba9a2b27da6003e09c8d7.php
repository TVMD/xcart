<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/account/add_new_card.address.twig */
class __TwigTemplate_66b1aceae520214e462633f30d91645bbcf75c86ebf4a9ed37d7f91c239f9dac extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressList", array(), "method")) {
            // line 9
            echo "
  ";
            // line 10
            $this->startForm("\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Form\\ZeroAuthAddress");            // line 11
            echo "
    <div class=\"zero-auth-address\">

      <strong>";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Billing address")), "html", null, true);
            echo ":</strong>

      ";
            // line 16
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSingleAddress", array(), "method")) {
                // line 17
                echo "        <div class=\"single\">
          ";
                // line 18
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSingleAddress", array(), "method"), "html", null, true);
                echo "
        </div>
      ";
            } else {
                // line 21
                echo "        <select name=\"address_id\" value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressId", array(), "method"), "html", null, true);
                echo "\" onchange=\"javascript: shadeIframe(); this.form.submit();\">
          ";
                // line 22
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressList", array(), "method"));
                foreach ($context['_seq'] as $context["addressId"] => $context["address"]) {
                    // line 23
                    echo "            <option value=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["addressId"], "html", null, true);
                    echo "\" ";
                    if (($context["addressId"] == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressId", array(), "method"))) {
                        echo "selected=\"selected\"";
                    }
                    echo ">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["address"], "html", null, true);
                    echo "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['addressId'], $context['address'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "        </select>
      ";
            }
            // line 27
            echo "
      ";
            // line 28
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress", "label" => "New address", "profileId" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomerProfileId", array(), "method")))), "html", null, true);
            echo "

    </div>
  ";
            $this->endForm();            // line 31
            echo " 

";
        } else {
            // line 34
            echo "
  <div class=\"alert alert-danger add-new-card-error\">
    <strong class=\"important-label\">";
            // line 36
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning")), "html", null, true);
            echo "!</strong>
    ";
            // line 37
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No billing address is defined. To add new card please ")), "html", null, true);
            echo "
    ";
            // line 38
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress", "label" => "enter address for this profile", "profileId" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomerProfileId", array(), "method")))), "html", null, true);
            echo "
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/account/add_new_card.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  99 => 37,  95 => 36,  91 => 34,  86 => 31,  80 => 28,  77 => 27,  73 => 25,  58 => 23,  54 => 22,  49 => 21,  43 => 18,  40 => 17,  38 => 16,  33 => 14,  28 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Address for add credit card*/
/*  #*/
/*  #*/
/*  # @ListChild (list="admin.account.add_new_card.address", weight="100")*/
/*  #}*/
/* */
/* {% if this.getAddressList() %}*/
/* */
/*   {% form '\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Form\\ZeroAuthAddress' %}*/
/* */
/*     <div class="zero-auth-address">*/
/* */
/*       <strong>{{ t('Billing address') }}:</strong>*/
/* */
/*       {% if this.isSingleAddress() %}*/
/*         <div class="single">*/
/*           {{ this.getSingleAddress() }}*/
/*         </div>*/
/*       {% else %}*/
/*         <select name="address_id" value="{{ this.getAddressId() }}" onchange="javascript: shadeIframe(); this.form.submit();">*/
/*           {% for addressId, address in this.getAddressList() %}*/
/*             <option value="{{ addressId }}" {% if addressId == this.getAddressId() %}selected="selected"{% endif %}>{{ address }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       {% endif %}*/
/* */
/*       {{ widget('\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress', label='New address', profileId=this.getCustomerProfileId()) }}*/
/* */
/*     </div>*/
/*   {% endform %} */
/* */
/* {% else %}*/
/* */
/*   <div class="alert alert-danger add-new-card-error">*/
/*     <strong class="important-label">{{ t('Warning') }}!</strong>*/
/*     {{ t('No billing address is defined. To add new card please ') }}*/
/*     {{ widget('\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress', label='enter address for this profile', profileId=this.getCustomerProfileId()) }}*/
/*   </div>*/
/* */
/* {% endif %}*/
/* */
