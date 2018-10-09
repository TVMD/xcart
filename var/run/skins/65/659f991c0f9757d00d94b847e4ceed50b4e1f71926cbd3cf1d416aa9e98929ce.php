<?php

/* /var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/title.twig */
class __TwigTemplate_b01b8aa6b31d547acbfa4e521e5442977ea225b3ef537d43f21df298adbc087f extends \XLite\Core\Templating\Twig\Template
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
        echo "<td>
    <h2 class=\"invoice\">
        <a href=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderCustomerUrl", array(), "method"), "html", null, true);
        echo "\">
            ";
        // line 9
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInvoiceTitle", array(), "method");
        echo "
        </a>
    </h2>
    <div class=\"subhead\">
        <div class=\"subhead-item order-date\">
            ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getDate", array(), "method")), "method"), "html", null, true);
        echo "
        </div>
        <div class=\"subhead-item grand-total grand-total-head\">
            ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Grand total")), "html", null, true);
        echo ": ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderTotal", array(), "method");
        echo "
        </div>
    </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/mail/common/order/invoice/parts/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 17,  35 => 14,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice title*/
/*  #*/
/*  # @ListChild (list="invoice.head", weight="10")*/
/*  #}*/
/* <td>*/
/*     <h2 class="invoice">*/
/*         <a href="{{ this.getOrderCustomerUrl() }}">*/
/*             {{ this.getInvoiceTitle()|raw }}*/
/*         </a>*/
/*     </h2>*/
/*     <div class="subhead">*/
/*         <div class="subhead-item order-date">*/
/*             {{ this.formatTime(this.order.getDate()) }}*/
/*         </div>*/
/*         <div class="subhead-item grand-total grand-total-head">*/
/*             {{ t('Grand total') }}: {{ this.getOrderTotal()|raw }}*/
/*         </div>*/
/*     </div>*/
/* </td>*/
/* */
