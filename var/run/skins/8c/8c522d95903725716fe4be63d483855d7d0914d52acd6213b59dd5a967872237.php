<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/SagePay/payment_status.twig */
class __TwigTemplate_42c82c46ab07bd43f93601a995f43586cec820b7329753ec040677cc90d82f56 extends \XLite\Core\Templating\Twig\Template
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
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Don't have account yet? Sign up for SagePay now!"));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/SagePay/payment_status.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Payment method status*/
/*  #*/
/*  # @ListChild (list="payment_status.after.SagePay_form_protocol", weight="100")*/
/*  #}*/
/* {% if not this.paymentMethod.isConfigured() %}*/
/* {{ t('Don\'t have account yet? Sign up for SagePay now!')|raw }}*/
/* {% endif %}*/
