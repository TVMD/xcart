<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/success/parts/panel.twig */
class __TwigTemplate_fb4f76232f5b2cfe9b6f72612d7c559dbb60117428925fb01152f6eac43097b4 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"order-success-panel\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout.success.panel"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/success/parts/panel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Panel*/
/*  #*/
/*  # @ListChild (list="checkout.success", weight="100")*/
/*  #}*/
/* */
/* <div class="order-success-panel">*/
/*   {{ widget_list('checkout.success.panel') }}*/
/* </div>*/
/* */
