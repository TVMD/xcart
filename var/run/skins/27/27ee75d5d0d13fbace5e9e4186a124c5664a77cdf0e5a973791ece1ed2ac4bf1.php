<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/success/parts/button.print.twig */
class __TwigTemplate_3ad88e13a8c45ebf5a4f3844310af80a8eeada8ca7503665376353d71d75dd99 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PrintInvoice"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/success/parts/button.print.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Print invoice button wrapper*/
/*  #*/
/*  # @ListChild (list="checkout.success.panel.buttons", weight="200")*/
/*  #}*/
/* {{ widget('XLite\\View\\Button\\PrintInvoice') }}*/
/* */
