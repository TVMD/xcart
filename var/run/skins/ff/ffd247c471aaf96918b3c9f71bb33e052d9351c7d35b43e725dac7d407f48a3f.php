<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/MailChimp/model/profile/subscriptions_list.twig */
class __TwigTemplate_24c47079269de0e71f8752ac8b1763e27323111e197caac1f187d4b5e27b671f extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\MailChimp\\View\\ItemsList\\Subscriptions\\RegisterSubscriptions", "profile" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProfile", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/MailChimp/model/profile/subscriptions_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Register form template*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.placeOrder", weight="350")*/
/*  # @ListChild (list="checkout_fastlane.sections.place-order.before", weight="100")*/
/*  # @ListChild (list="checkout.review.selected.items", weight="2000")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\XC\\MailChimp\\View\\ItemsList\\Subscriptions\\RegisterSubscriptions', profile=this.getProfile()) }}*/
/* */
