<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/totals.total.twig */
class __TwigTemplate_90cc512b60fb16dadb1e88743d0da04fe7655d0ea99a621a7018f16c1db5a9a5 extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"total\">
  <span class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Grand total")), "html", null, true);
        echo ":</span>
  <span class=\"value\">";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderTotal", array(), "method");
        echo "</span>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/totals.total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals : total*/
/*  #*/
/*  # @ListChild (list="invoice.base.totals.after", weight="10")*/
/*  #}*/
/* <div class="total">*/
/*   <span class="title">{{ t('Grand total') }}:</span>*/
/*   <span class="value">{{ this.getOrderTotal()|raw }}</span>*/
/* </div>*/
/* */
