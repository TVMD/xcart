<?php

/* /var/www/next/output/xcart/src/skins/customer/order/parts/link.print.twig */
class __TwigTemplate_c3d51b185e8f5236f14149c8cf9d75e3dba65f9ad145e6ddf282440eeacec928 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"print\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\PrintInvoice"))), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/parts/link.print.twig";
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
/*  # Print invoice button wrapper*/
/*  #*/
/*  # @ListChild (list="order.links", weight="100")*/
/*  #}*/
/* <li class="print">*/
/*   {{ widget('XLite\\View\\Button\\PrintInvoice') }}*/
/* </li>*/
/* */
