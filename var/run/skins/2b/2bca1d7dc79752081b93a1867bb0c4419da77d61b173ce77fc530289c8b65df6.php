<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/totals.modifiers.twig */
class __TwigTemplate_99a2e4fb44ec901d073e35dbe8088b54d16281ab3848b853e96bb20a90a4911a extends \XLite\Core\Templating\Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurchargeTotals", array(), "method"));
        foreach ($context['_seq'] as $context["sType"] => $context["surcharge"]) {
            // line 8
            echo "  <li ";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "printTagAttributes", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurchargeAttributes", array(0 => $context["sType"], 1 => $context["surcharge"]), "method")), "method");
            echo ">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => $this->getAttribute($context["surcharge"], "widget", array()), "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())))), "html", null, true);
            echo "
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sType'], $context['surcharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/totals.modifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals : modifiers*/
/*  #*/
/*  # @ListChild (list="order.base.totals", weight="200")*/
/*  #}*/
/* */
/* {% for sType, surcharge in this.getSurchargeTotals() %}*/
/*   <li {{ this.printTagAttributes(this.getSurchargeAttributes(sType, surcharge))|raw }}>*/
/*     {{ widget(surcharge.widget, surcharge=surcharge, sType=sType, order=this.order) }}*/
/*   </li>*/
/* {% endfor %}*/
/* */
