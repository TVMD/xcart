<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/items_list/payment/methods/parts/action.right.after.expressCheckout.twig */
class __TwigTemplate_44624654814b3025a2742283fab52407442493ef80c1fe9bd7db4780b8027f4b extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method") || $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method"))) {
            // line 7
            echo "  <div class=\"learn-more\">
    ";
            // line 8
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method")) {
                // line 9
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Learn More")), "html", null, true);
                echo "</a>
    ";
            }
            // line 11
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getKnowledgeBasePageURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())), "method"))) {
                // line 12
                echo "      <span>&amp;</span>
    ";
            }
            // line 14
            echo "  
    ";
            // line 15
            if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method")) {
                // line 16
                echo "  
    ";
                // line 17
                if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "isInContextSignUpAvailable", array(), "method")) {
                    // line 18
                    echo "    <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method"), "html", null, true);
                    echo "\" target=\"PPFrame\" data-paypal-button=\"true\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign Up")), "html", null, true);
                    echo "</a>
    ";
                } else {
                    // line 20
                    echo "    <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getReferralPageURL", array(), "method"), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign Up")), "html", null, true);
                    echo "</a>
    ";
                }
                // line 22
                echo "  
    ";
            }
            // line 24
            echo "  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/items_list/payment/methods/parts/action.right.after.expressCheckout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 24,  67 => 22,  59 => 20,  51 => 18,  49 => 17,  46 => 16,  44 => 15,  41 => 14,  37 => 12,  34 => 11,  26 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment methods list : right action*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.row.after.ExpressCheckout", weight=100)*/
/*  #}*/
/* {% if this.method.getReferralPageURL() or this.getKnowledgeBasePageURL(this.method) %}*/
/*   <div class="learn-more">*/
/*     {% if this.getKnowledgeBasePageURL(this.method) %}*/
/*       <a href="{{ this.getKnowledgeBasePageURL(this.method) }}" target="_blank">{{ t('Learn More') }}</a>*/
/*     {% endif %}*/
/*     {% if this.method.getReferralPageURL() and this.getKnowledgeBasePageURL(this.method) %}*/
/*       <span>&amp;</span>*/
/*     {% endif %}*/
/*   */
/*     {% if this.method.getReferralPageURL() %}*/
/*   */
/*     {% if this.method.isInContextSignUpAvailable() %}*/
/*     <a href="{{ this.method.getReferralPageURL() }}" target="PPFrame" data-paypal-button="true">{{ t('Sign Up') }}</a>*/
/*     {% else %}*/
/*     <a href="{{ this.method.getReferralPageURL() }}" target="_blank">{{ t('Sign Up') }}</a>*/
/*     {% endif %}*/
/*   */
/*     {% endif %}*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
