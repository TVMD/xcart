<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/title.twig */
class __TwigTemplate_83793b87d72f97536eca97eb6950c7beb07e912721f649cee3a2c2d6621d9f7e extends \XLite\Core\Templating\Twig\Template
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
    <div style=\"display: inline-block; width: 100%\">
        <h2 class=\"invoice\">";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInvoiceTitle", array(), "method");
        echo "</h2>
        <div class=\"subhead\">
            <div class=\"subhead-item order-date\">
                ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatTime", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getDate", array(), "method")), "method"), "html", null, true);
        echo "
            </div>
            <div class=\"subhead-item grand-total grand-total-head\">
                ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Grand total")), "html", null, true);
        echo ": ";
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderTotal", array(), "method");
        echo "
            </div>
        </div>
    </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice title*/
/*  #*/
/*  # @ListChild (list="invoice.head", weight="10")*/
/*  #}*/
/* <td>*/
/*     <div style="display: inline-block; width: 100%">*/
/*         <h2 class="invoice">{{ this.getInvoiceTitle()|raw }}</h2>*/
/*         <div class="subhead">*/
/*             <div class="subhead-item order-date">*/
/*                 {{ this.formatTime(this.order.getDate()) }}*/
/*             </div>*/
/*             <div class="subhead-item grand-total grand-total-head">*/
/*                 {{ t('Grand total') }}: {{ this.getOrderTotal()|raw }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </td>*/
/* */
