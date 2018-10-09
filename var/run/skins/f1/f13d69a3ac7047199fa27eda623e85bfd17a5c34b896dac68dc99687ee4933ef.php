<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/checkout/script.twig */
class __TwigTemplate_492b9bd71b2403706ca926502436f0238dcd68addd28defa3b5a4002b601f6dd extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        echo "<script type=\"text/javascript\">
var xpcPaymentIds = [];
";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getXpcPaymentIds", array(), "method")) {
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getXpcPaymentIds", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                echo "xpcPaymentIds[";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "] = '";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "';";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "
var xpcSavedCardPaymentId = '";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getXpcSavedCardPaymentId", array(), "method"), "html", null, true);
            echo "';
var xpcBillingAddressId = '";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getXpcBillingAddressId", array(), "method"), "html", null, true);
            echo "'; 
var xpcUseIframe = '";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isUseIframe", array(), "method"), "html", null, true);
            echo "';
var currentPaymentId = ";
            // line 16
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCheckoutReady", array(), "method")) {
                echo "'";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPaymentId", array(), "method"), "html", null, true);
                echo "'";
            } else {
                echo "false";
            }
            echo ";
";
        } else {
            // line 18
            echo "var xpcSavedCardPaymentId = '0';
var xpcBillingAddressId = '0'; 
var xpcUseIframe = '0';
var currentPaymentId = false;
";
        }
        // line 23
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/checkout/script.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  64 => 18,  53 => 16,  49 => 15,  45 => 14,  41 => 13,  38 => 12,  25 => 11,  23 => 10,  19 => 8,);
    }
}
/* {##*/
/*  # iframe*/
/*  #*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected", weight="20") */
/*  # @ListChild (list="checkout_fastlane.sections.payment.left", weight="500") */
/*  #}*/
/* <script type="text/javascript">*/
/* var xpcPaymentIds = [];*/
/* {% if this.getXpcPaymentIds() %}*/
/* {% for id in this.getXpcPaymentIds() %}xpcPaymentIds[{{ id }}] = '{{ id }}';{% endfor %}*/
/* */
/* var xpcSavedCardPaymentId = '{{ this.getXpcSavedCardPaymentId() }}';*/
/* var xpcBillingAddressId = '{{ this.getXpcBillingAddressId() }}'; */
/* var xpcUseIframe = '{{ this.isUseIframe() }}';*/
/* var currentPaymentId = {% if this.isCheckoutReady() %}'{{ this.getPaymentId() }}'{% else %}false{% endif %};*/
/* {% else %}*/
/* var xpcSavedCardPaymentId = '0';*/
/* var xpcBillingAddressId = '0'; */
/* var xpcUseIframe = '0';*/
/* var currentPaymentId = false;*/
/* {% endif %}*/
/* </script>*/
/* */
