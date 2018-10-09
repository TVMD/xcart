<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/totals.total.twig */
class __TwigTemplate_8818eb5e5746fd2d3037f0e38e10ff8adb9f51bfe192f4228309146405be64e8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<li class=\"total\">
  <div class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Grand total")), "html", null, true);
        echo ":</div>
  <div class=\"value\">";
        // line 8
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOrderTotal", array(), "method");
        echo "</div>
  <div class=\"recalc\"></div>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/totals.total.twig";
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
/*  # @ListChild (list="order.base.totals", weight="300")*/
/*  #}*/
/* <li class="total">*/
/*   <div class="title">{{ t('Grand total') }}:</div>*/
/*   <div class="value">{{ this.getOrderTotal()|raw }}</div>*/
/*   <div class="recalc"></div>*/
/* </li>*/
/* */
