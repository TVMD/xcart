<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/success_message.twig */
class __TwigTemplate_63a2887ce2d9c493f5f2a353c2e4379b019eadb10293544e9c77d07ce286ee64 extends \XLite\Core\Templating\Twig\Template
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
        echo "
<p>";
        // line 7
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Congratulations! Your order has been placed successfully"));
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/success_message.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order success note*/
/*  #*/
/*  # @ListChild (list="checkout.success.panel", weight="100")*/
/*  #}*/
/* */
/* <p>{{ t('Congratulations! Your order has been placed successfully')|raw }}</p>*/
/* */
