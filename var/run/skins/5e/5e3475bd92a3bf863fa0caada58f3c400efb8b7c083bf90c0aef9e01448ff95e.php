<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/items_list/payment/methods/parts/action.right.after.twig */
class __TwigTemplate_c479fd7e49232c8903ed5afff27ad34f40abb1a7bf14735d3fe4003453715252 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 9
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method") || $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method"))) {
            // line 10
            echo "  <div class=\"learn-more\">
    ";
            // line 11
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
                // line 12
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Learn More")), "html", null, true);
                echo "</a>
    ";
            }
            // line 14
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method"))) {
                // line 15
                echo "      <span>&amp;</span>
    ";
            }
            // line 17
            echo "    ";
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method")) {
                // line 18
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign Up")), "html", null, true);
                echo "</a>
    ";
            }
            // line 20
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/items_list/payment/methods/parts/action.right.after.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 20,  47 => 18,  44 => 17,  40 => 15,  37 => 14,  29 => 12,  27 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Payment methods list : right action*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.row.after.PayflowLink", weight=100)*/
/*  # @ListChild (list="payment.methods.list.row.after.PaypalAdvanced", weight=100)*/
/*  # @ListChild (list="payment.methods.list.row.after.PaypalWPS", weight=100)*/
/*  #}*/
/* */
/* {% if this.method.getReferralPageURL() or this.getKnowledgeBasePageURL(this.method) %}*/
/*   <div class="learn-more">*/
/*     {% if this.getKnowledgeBasePageURL(this.method) %}*/
/*       <a href="{{ this.getKnowledgeBasePageURL(this.method) }}" target="_blank">{{ t('Learn More') }}</a>*/
/*     {% endif %}*/
/*     {% if this.method.getReferralPageURL() and this.getKnowledgeBasePageURL(this.method) %}*/
/*       <span>&amp;</span>*/
/*     {% endif %}*/
/*     {% if this.method.getReferralPageURL() %}*/
/*       <a href="{{ this.method.getReferralPageURL() }}" target="_blank">{{ t('Sign Up') }}</a>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
