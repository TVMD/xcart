<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.address.twig */
class __TwigTemplate_bbf823e8021a64d9bd599071cfbdad4844ff7eb07eab28a259aca6d2477ec870 extends \XLite\Core\Templating\Twig\Template
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
            echo "    <input type=\"hidden\" name=\"action\" value=\"update_address\">

    <div class=\"zero-auth-address\">

      <strong>";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Billing address")), "html", null, true);
            echo ":</strong>

      <select name=\"address_id\" value=\"";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressId", array(), "method"), "html", null, true);
            echo "\" onchange=\"javascript: shadeIframe(); this.form.submit();\">
        ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressList", array(), "method"));
            foreach ($context['_seq'] as $context["addressId"] => $context["address"]) {
                // line 19
                echo "          <option value=\"";
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
            // line 21
            echo "      </select>

      ";
            // line 23
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress", "label" => "New address", "profileId" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileId", array(), "method")))), "html", null, true);
            echo "

    </div>
  ";
            $this->endForm();            // line 27
            echo "
";
        } else {
            // line 29
            echo "
  <div class=\"alert alert-danger add-new-card-error\">
    <strong class=\"important-label\">";
            // line 31
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Warning")), "html", null, true);
            echo "!</strong>
    ";
            // line 32
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("No billing address is defined. To add new card please ")), "html", null, true);
            echo "
    ";
            // line 33
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress", "label" => "enter your address", "profileId" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfileId", array(), "method")))), "html", null, true);
            echo "
  </div>

";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  84 => 32,  80 => 31,  76 => 29,  72 => 27,  66 => 23,  62 => 21,  47 => 19,  43 => 18,  39 => 17,  34 => 15,  28 => 11,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Customer's address selector at add new card page */
/*  #*/
/*  #*/
/*  # @ListChild (list="customer.account.add_new_card.address", weight="100")*/
/*  #}*/
/* */
/* {% if this.getAddressList() %}*/
/* */
/*   {% form '\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Form\\ZeroAuthAddress' %}*/
/*     <input type="hidden" name="action" value="update_address">*/
/* */
/*     <div class="zero-auth-address">*/
/* */
/*       <strong>{{ t('Billing address') }}:</strong>*/
/* */
/*       <select name="address_id" value="{{ this.getAddressId() }}" onchange="javascript: shadeIframe(); this.form.submit();">*/
/*         {% for addressId, address in this.getAddressList() %}*/
/*           <option value="{{ addressId }}" {% if addressId == this.getAddressId() %}selected="selected"{% endif %}>{{ address }}</option>*/
/*         {% endfor %}*/
/*       </select>*/
/* */
/*       {{ widget('\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress', label='New address', profileId=this.getProfileId()) }}*/
/* */
/*     </div>*/
/*   {% endform %}*/
/* */
/* {% else %}*/
/* */
/*   <div class="alert alert-danger add-new-card-error">*/
/*     <strong class="important-label">{{ t('Warning') }}!</strong>*/
/*     {{ t('No billing address is defined. To add new card please ') }}*/
/*     {{ widget('\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Button\\AddAddress', label='enter your address', profileId=this.getProfileId()) }}*/
/*   </div>*/
/* */
/* {% endif %}*/
/* */
