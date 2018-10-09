<?php

/* /var/www/next/output/xcart/src/skins/customer/order/invoice/parts/head.twig */
class __TwigTemplate_184777f31edb76d7a18083eee018bcae6997a3f618989bece52f0576efb9a069 extends \XLite\Core\Templating\Twig\Template
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
        echo "<table class=\"header\">
  <tr>
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.head"))), "html", null, true);
        echo "
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/invoice/parts/head.twig";
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
/*  # Invoice head*/
/*  #*/
/*  # @ListChild (list="invoice.base", weight="10")*/
/*  #}*/
/* <table class="header">*/
/*   <tr>*/
/*     {{ widget_list('invoice.head') }}*/
/*   </tr>*/
/* </table>*/
/* */
