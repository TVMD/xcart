<?php

/* /var/www/next/output/xcart/src/skins/mail/common/modules/CDev/XPaymentsConnector/invoice.twig */
class __TwigTemplate_b4612525e4a32dea9567f1233589c3a9105b9623adb11c3f305be920649d42a4 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCCData", array(), "method")) {
            // line 9
            echo "  <div>
    <br />
    <strong>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Used credit cards")), "html", null, true);
            echo "</strong>
    <br />
  
    ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCCData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
                // line 15
                echo "      ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_type", array()), "html", null, true);
                echo " ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "card_number", array()), "html", null, true);
                echo " ";
                if ($this->getAttribute($context["cc"], "expire", array())) {
                    echo "(";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["cc"], "expire", array()), "html", null, true);
                    echo ")";
                }
                echo "<br />
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/modules/CDev/XPaymentsConnector/invoice.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 17,  38 => 15,  34 => 14,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Credit cards on the invoice*/
/*  #*/
/*  #*/
/*  # @ListChild (list="invoice.bottom.address.billing", weight="30")*/
/*  #}*/
/* */
/* {% if this.order.getCCData() %}*/
/*   <div>*/
/*     <br />*/
/*     <strong>{{ t('Used credit cards') }}</strong>*/
/*     <br />*/
/*   */
/*     {% for cc in this.order.getCCData() %}*/
/*       {{ cc.card_type }} {{ cc.card_number }} {% if cc.expire %}({{ cc.expire }}){% endif %}<br />*/
/*     {% endfor %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
