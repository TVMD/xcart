<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.address.twig */
class __TwigTemplate_ba01ab3db4ac6e5e88c9118f51845f484acf401a18a6fd770f962ba332498b0a extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        $context["company"] = $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCompanyConfiguration", array(), "method");
        // line 8
        echo "
<td class=\"right-adresses-part address\">
  ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.subhead.companyAddress", "company" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getCompanyConfiguration", array(), "method")))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/head.address.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice : header : address box*/
/*  #*/
/*  # @ListChild (list="invoice.subhead", weight="20")*/
/*  #}*/
/* */
/* {% set company = this.order.getCompanyConfiguration() %}*/
/* */
/* <td class="right-adresses-part address">*/
/*   {{ widget_list('invoice.subhead.companyAddress', company=this.order.getCompanyConfiguration()) }}*/
/* </td>*/
/* */
