<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/settings/ExpressCheckout/payment_status.twig */
class __TwigTemplate_b196de40f6d98fb16e7914807cae3419aa3425e56b955302110643179dfa7b4c extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "paymentMethod", array()), "isConfigured", array(), "method")) {
            // line 7
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Don't have account yet?")), "html", null, true);
            echo "
  ";
            // line 8
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isInContextSignUpAvailable", array(), "method")) {
                // line 9
                echo "  <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSignUpUrl", array(), "method"), "html", null, true);
                echo "\" target=\"PPFrame\" data-paypal-button=\"true\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign Up Now")), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 11
                echo "  <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSignUpUrl", array(), "method"), "html", null, true);
                echo "\" target=\"_blank\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sign Up Now")), "html", null, true);
                echo "</a>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Paypal/settings/ExpressCheckout/payment_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 11,  27 => 9,  25 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment method status*/
/*  #*/
/*  # @ListChild (list="payment_status.after.ExpressCheckout", weight="100")*/
/*  #}*/
/* {% if not this.paymentMethod.isConfigured() %}*/
/* {{ t('Don\'t have account yet?') }}*/
/*   {% if this.isInContextSignUpAvailable() %}*/
/*   <a href="{{ this.getSignUpUrl() }}" target="PPFrame" data-paypal-button="true">{{ t('Sign Up Now') }}</a>*/
/*   {% else %}*/
/*   <a href="{{ this.getSignUpUrl() }}" target="_blank">{{ t('Sign Up Now') }}</a>*/
/*   {% endif %}*/
/* {% endif %}*/
