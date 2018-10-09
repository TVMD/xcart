<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/invoice/invoice.twig */
class __TwigTemplate_b8c0d0196bc1637f39d43046e87161181bf90f95346f04bada1527a0638f669f extends \XLite\Core\Templating\Twig\Template
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
        echo "  ";
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCCData", array(), "method")) {
            // line 8
            echo "    <div class=\"xpc-card-box\">
  
      <strong>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Used credit cards")), "html", null, true);
            echo "</strong>
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCCData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
                // line 12
                echo "        <div class=\"xpc-card\">
          <span class=\"card-icon-container\">
            <span class=\"xpc-card-type ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_type_css", array()), "html", null, true);
                echo "\">
              <img src=\"skins/customer/images/spacer.gif\" alt=\"";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_type", array()), "html", null, true);
                echo "\" />
            </span>
          </span>
          ";
                // line 18
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_number", array()), "html", null, true);
                echo "
          ";
                // line 19
                if ($this->getAttribute($context["cc"], "expire", array())) {
                    // line 20
                    echo "            <span>(";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "expire", array()), "html", null, true);
                    echo ")</span>
          ";
                }
                // line 22
                echo "        </div>
        <br />
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "  
  </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/invoice/invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 25,  60 => 22,  54 => 20,  52 => 19,  48 => 18,  42 => 15,  38 => 14,  34 => 12,  30 => 11,  26 => 10,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Credit cards on the invoice*/
/*  #*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.address.billing", weight="30")*/
/*  #}*/
/*   {% if this.order.getCCData() %}*/
/*     <div class="xpc-card-box">*/
/*   */
/*       <strong>{{ t('Used credit cards') }}</strong>*/
/*       {% for cc in this.order.getCCData() %}*/
/*         <div class="xpc-card">*/
/*           <span class="card-icon-container">*/
/*             <span class="xpc-card-type {{ cc.card_type_css }}">*/
/*               <img src="skins/customer/images/spacer.gif" alt="{{ cc.card_type }}" />*/
/*             </span>*/
/*           </span>*/
/*           {{ cc.card_number }}*/
/*           {% if cc.expire %}*/
/*             <span>({{ cc.expire }})</span>*/
/*           {% endif %}*/
/*         </div>*/
/*         <br />*/
/*       {% endfor %}*/
/*   */
/*   </div>*/
/*   {% endif %}*/
/* */
