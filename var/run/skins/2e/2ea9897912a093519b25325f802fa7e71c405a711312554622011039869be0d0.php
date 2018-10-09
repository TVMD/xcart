<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.twig */
class __TwigTemplate_8f1d7fc65b5ba392194d8588250101c9ab34a23c4f7a0bf7146f847ec1888fcf extends \XLite\Core\Templating\Twig\Template
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
        echo "<table cellspacing=\"0\" class=\"header\">
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
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.twig";
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
/* <table cellspacing="0" class="header">*/
/*   <tr>*/
/*     {{ widget_list('invoice.head') }}*/
/*   </tr>*/
/* </table>*/
/* */
