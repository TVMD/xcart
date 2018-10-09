<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/transactions/body.twig */
class __TwigTemplate_86170a174d2545b7707fb20a309b07cf4ed993268821043343b31ba05886db72 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getXpcTransactions", array(), "method")) {
            // line 9
            echo "  <div class=\"xpc-transactions line-3\">
    ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\Module\\CDev\\XPaymentsConnector\\View\\ItemsList\\Model\\Order\\Transactions"))), "html", null, true);
            echo "
  </div>
";
        }
        // line 13
        echo "
<br/>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/order/transactions/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  27 => 10,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # List of X-Payments payments. Here are called as transactions. */
/*  #*/
/*  #*/
/*  # @ListChild (list="order.operations", weight="290")*/
/*  #}*/
/* */
/* {% if this.getXpcTransactions() %}*/
/*   <div class="xpc-transactions line-3">*/
/*     {{ widget('XLite\\Module\\CDev\\XPaymentsConnector\\View\\ItemsList\\Model\\Order\\Transactions') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* <br/>*/
/* */
