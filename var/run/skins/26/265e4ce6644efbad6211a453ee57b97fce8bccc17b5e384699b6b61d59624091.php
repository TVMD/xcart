<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/totals.modifiers.twig */
class __TwigTemplate_b48f881e2db4275a22ab9787277abda189cc3ac9cb4e9aac49c0511102742549 extends \XLite\Core\Templating\Twig\Template
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
            echo "  <tr class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSurchargeClassName", array(0 => $context["sType"], 1 => $context["surcharge"]), "method"), "html", null, true);
            echo "\">
    ";
            // line 9
            if (($this->getAttribute($context["surcharge"], "count", array()) == "1")) {
                // line 10
                echo "      <td class=\"title\">
        ";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "lastName", array()), "html", null, true);
                echo ":
        ";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.base.totals.modifier.name", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())))), "html", null, true);
                echo "
      </td>
    ";
            } else {
                // line 15
                echo "      <td class=\"title list-owner\">
        ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["surcharge"], "name", array()), "html", null, true);
                echo ":
        ";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.base.totals.modifier.name", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())))), "html", null, true);
                echo "
      </td>
    ";
            }
            // line 20
            echo "
    <td class=\"value\">
      ";
            // line 22
            if ($this->getAttribute($context["surcharge"], "available", array())) {
                // line 23
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatSurcharge", array(0 => $context["surcharge"]), "method"), "html", null, true);
                echo "
      ";
            } else {
                // line 25
                echo "        ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("n/a")), "html", null, true);
                echo "
      ";
            }
            // line 27
            echo "      ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.base.totals.modifier.value", "surcharge" => $context["surcharge"], "sType" => $context["sType"], "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())))), "html", null, true);
            echo "
    </td>
  </tr>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['sType'], $context['surcharge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/totals.modifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 27,  71 => 25,  65 => 23,  63 => 22,  59 => 20,  53 => 17,  49 => 16,  46 => 15,  40 => 12,  36 => 11,  33 => 10,  31 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice totals : modifiers*/
/*  #*/
/*  # @ListChild (list="invoice.base.totals", weight="200")*/
/*  #}*/
/* */
/* {% for sType, surcharge in this.getSurchargeTotals() %}*/
/*   <tr class="{{ this.getSurchargeClassName(sType, surcharge) }}">*/
/*     {% if surcharge.count == '1' %}*/
/*       <td class="title">*/
/*         {{ surcharge.lastName }}:*/
/*         {{ widget_list('invoice.base.totals.modifier.name', surcharge=surcharge, sType=sType, order=this.order) }}*/
/*       </td>*/
/*     {% else %}*/
/*       <td class="title list-owner">*/
/*         {{ surcharge.name }}:*/
/*         {{ widget_list('invoice.base.totals.modifier.name', surcharge=surcharge, sType=sType, order=this.order) }}*/
/*       </td>*/
/*     {% endif %}*/
/* */
/*     <td class="value">*/
/*       {% if surcharge.available %}*/
/*         {{ this.formatSurcharge(surcharge) }}*/
/*       {% else %}*/
/*         {{ t('n/a') }}*/
/*       {% endif %}*/
/*       {{ widget_list('invoice.base.totals.modifier.value', surcharge=surcharge, sType=sType, order=this.order) }}*/
/*     </td>*/
/*   </tr>*/
/* {% endfor %}*/
/* */
