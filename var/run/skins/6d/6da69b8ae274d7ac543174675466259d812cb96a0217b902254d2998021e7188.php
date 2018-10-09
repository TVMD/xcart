<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/saved_cards.table.twig */
class __TwigTemplate_fb6e8bed3072b42dd8934d885a1dfddd5cd15d370536714cbfaccc67b0beb84c extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "profile", array()), "getSavedCards", array(), "method")) {
            // line 10
            echo "<div>

  ";
            // line 12
            $this->startForm("\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Form\\SavedCards");            // line 13
            echo "
  <table class=\"saved-cards\">
    <tr>
      <th>";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Order")), "html", null, true);
            echo "</th>
      <th>";
            // line 17
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Credit card")), "html", null, true);
            echo "</th>
      <th>";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Billing Address")), "html", null, true);
            echo "</th>
      <th>";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Default")), "html", null, true);
            echo "</th>
      <th></th>
    </tr>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "profile", array()), "getSavedCards", array(), "method"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
                // line 23
                echo "      <tr>
        <td class=\"orderid\"><a href=\"";
                // line 24
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "order", "", array("order_number" => $this->getAttribute($context["cc"], "invoice_id", array())))), "html", null, true);
                echo "\">#";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "invoice_id", array()), "html", null, true);
                echo "</a></td>
        <td>

          <div class=\"saved-card\">
            <div class=\"card-icon-container\">
              <span class=\"xpc-card-type ";
                // line 29
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_type_css", array()), "html", null, true);
                echo "\"><img src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
                echo "\" alt=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_type", array()), "html", null, true);
                echo "\"/></span>
            </div>
            <div class=\"card-number\">
              ";
                // line 32
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_number", array()), "html", null, true);
                echo "
            </div>
            ";
                // line 34
                if ($this->getAttribute($context["cc"], "expire", array())) {
                    // line 35
                    echo "              <div class=\"card-expire\">
                ";
                    // line 36
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "expire", array()), "html", null, true);
                    echo "
              </div>
            ";
                }
                // line 39
                echo "          </div>

        </td>
        <td class=\"address\">
          ";
                // line 43
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressList", array(), "method")) {
                    // line 44
                    echo "
            ";
                    // line 45
                    if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSingleAddress", array(), "method")) {
                        // line 46
                        echo "              <div class=\"single\">
                ";
                        // line 47
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSingleAddress", array(), "method"), "html", null, true);
                        echo "
              </div>
            ";
                    } else {
                        // line 50
                        echo "              <select name=\"address_id[";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_id", array()), "html", null, true);
                        echo "]\" value=\"";
                        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "address_id", array()), "html", null, true);
                        echo "\">
                ";
                        // line 51
                        if ( !$this->getAttribute($context["cc"], "address_id", array())) {
                            // line 52
                            echo "                  <option value=\"0\" selected=\"selected\"></option>
                ";
                        }
                        // line 54
                        echo "                ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressList", array(), "method"));
                        foreach ($context['_seq'] as $context["addressId"] => $context["address"]) {
                            // line 55
                            echo "                  <option value=\"";
                            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["addressId"], "html", null, true);
                            echo "\" ";
                            if (($context["addressId"] == $this->getAttribute($context["cc"], "address_id", array()))) {
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
                        // line 57
                        echo "              </select>
            ";
                    }
                    // line 59
                    echo "          ";
                }
                // line 60
                echo "        </td>
        <td class=\"default-column\">
          ";
                // line 62
                if ($this->getAttribute($context["cc"], "is_default", array())) {
                    // line 63
                    echo "            <input checked type=\"radio\" name=\"default_card_id\" value=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_id", array()), "html", null, true);
                    echo "\" />
          ";
                } else {
                    // line 65
                    echo "            <input type=\"radio\" name=\"default_card_id\" value=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_id", array()), "html", null, true);
                    echo "\" />
          ";
                }
                // line 67
                echo "        </td>
        <td class=\"remove-column\">
          ";
                $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath($this->getAttribute(                // line 69
(isset($context["this"]) ? $context["this"] : null), "getRemoveTemplate", array(0 => $this->getAttribute($context["cc"], "card_id", array())), "method"));                list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
                if ($templateWrapperText) {
echo $templateWrapperStart;
}

                $this->loadTemplate($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRemoveTemplate", array(0 => $this->getAttribute($context["cc"], "card_id", array())), "method"), "/var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/saved_cards.table.twig", 69)->display($context);
                if ($templateWrapperText) {
                    echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
                }
                // line 70
                echo "        </td>
      </tr>  
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "  </table>

  ";
            // line 75
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Submit", "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Update saved credit cards")), "style" => "main"))), "html", null, true);
            echo "

  ";
            // line 77
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "allowZeroAuth", array(), "method")) {
                // line 78
                echo "    &nbsp;&nbsp;<a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "add_new_card")), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add new credit card")), "html", null, true);
                echo "</a>
  ";
            }
            // line 80
            echo "
  ";
            $this->endForm();            // line 82
            echo "
</div>
";
        } else {
            // line 85
            echo "
  ";
            // line 86
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "allowZeroAuth", array(), "method")) {
                // line 87
                echo "    <br/>
    &nbsp;&nbsp;<a href=\"";
                // line 88
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "add_new_card")), "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add new credit card")), "html", null, true);
                echo "</a>
  ";
            }
            // line 90
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/saved_cards.table.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 90,  254 => 88,  251 => 87,  249 => 86,  246 => 85,  241 => 82,  238 => 80,  230 => 78,  228 => 77,  223 => 75,  219 => 73,  203 => 70,  193 => 69,  189 => 67,  183 => 65,  177 => 63,  175 => 62,  171 => 60,  168 => 59,  164 => 57,  149 => 55,  144 => 54,  140 => 52,  138 => 51,  131 => 50,  125 => 47,  122 => 46,  120 => 45,  117 => 44,  115 => 43,  109 => 39,  103 => 36,  100 => 35,  98 => 34,  93 => 32,  83 => 29,  73 => 24,  70 => 23,  53 => 22,  47 => 19,  43 => 18,  39 => 17,  35 => 16,  30 => 13,  29 => 12,  25 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # iframe */
/*  #*/
/*  #*/
/*  # @ListChild (list="customer.account.saved_cards.table", weight="100")*/
/*  #}*/
/* */
/* */
/* {% if this.profile.getSavedCards() %}*/
/* <div>*/
/* */
/*   {% form '\\XLite\\Module\\CDev\\XPaymentsConnector\\View\\Form\\SavedCards' %}*/
/* */
/*   <table class="saved-cards">*/
/*     <tr>*/
/*       <th>{{ t('Order') }}</th>*/
/*       <th>{{ t('Credit card') }}</th>*/
/*       <th>{{ t('Billing Address') }}</th>*/
/*       <th>{{ t('Default') }}</th>*/
/*       <th></th>*/
/*     </tr>*/
/*     {% for cc in this.profile.getSavedCards() %}*/
/*       <tr>*/
/*         <td class="orderid"><a href="{{ url('order', '', {'order_number': cc.invoice_id}) }}">#{{ cc.invoice_id }}</a></td>*/
/*         <td>*/
/* */
/*           <div class="saved-card">*/
/*             <div class="card-icon-container">*/
/*               <span class="xpc-card-type {{ cc.card_type_css }}"><img src="{{ asset('images/spacer.gif') }}" alt="{{ cc.card_type }}"/></span>*/
/*             </div>*/
/*             <div class="card-number">*/
/*               {{ cc.card_number }}*/
/*             </div>*/
/*             {% if cc.expire %}*/
/*               <div class="card-expire">*/
/*                 {{ cc.expire }}*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/* */
/*         </td>*/
/*         <td class="address">*/
/*           {% if this.getAddressList() %}*/
/* */
/*             {% if this.isSingleAddress() %}*/
/*               <div class="single">*/
/*                 {{ this.getSingleAddress() }}*/
/*               </div>*/
/*             {% else %}*/
/*               <select name="address_id[{{ cc.card_id }}]" value="{{ cc.address_id }}">*/
/*                 {% if not cc.address_id %}*/
/*                   <option value="0" selected="selected"></option>*/
/*                 {% endif %}*/
/*                 {% for addressId, address in this.getAddressList() %}*/
/*                   <option value="{{ addressId }}" {% if addressId == cc.address_id %}selected="selected"{% endif %}>{{ address }}</option>*/
/*                 {% endfor %}*/
/*               </select>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </td>*/
/*         <td class="default-column">*/
/*           {% if cc.is_default %}*/
/*             <input checked type="radio" name="default_card_id" value="{{ cc.card_id }}" />*/
/*           {% else %}*/
/*             <input type="radio" name="default_card_id" value="{{ cc.card_id }}" />*/
/*           {% endif %}*/
/*         </td>*/
/*         <td class="remove-column">*/
/*           {% include this.getRemoveTemplate(cc.card_id) %}*/
/*         </td>*/
/*       </tr>  */
/*     {% endfor %}*/
/*   </table>*/
/* */
/*   {{ widget('\\XLite\\View\\Button\\Submit', label=t('Update saved credit cards'), style='main') }}*/
/* */
/*   {% if this.allowZeroAuth() %}*/
/*     &nbsp;&nbsp;<a href="{{ url('add_new_card') }}">{{ t('Add new credit card') }}</a>*/
/*   {% endif %}*/
/* */
/*   {% endform %}*/
/* */
/* </div>*/
/* {% else %}*/
/* */
/*   {% if this.allowZeroAuth() %}*/
/*     <br/>*/
/*     &nbsp;&nbsp;<a href="{{ url('add_new_card') }}">{{ t('Add new credit card') }}</a>*/
/*   {% endif %}*/
/* */
/* {% endif %}*/
/* */
