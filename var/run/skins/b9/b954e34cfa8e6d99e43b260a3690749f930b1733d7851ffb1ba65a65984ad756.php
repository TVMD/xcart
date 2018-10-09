<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/prices.twig */
class __TwigTemplate_2445f19df6c8893d1fcdfc741ad38468f96dbdcd11bd87799539e52fdc9d7e7f extends \XLite\Core\Templating\Twig\Template
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
<tr class=\"prices\">
  <td class=\"title\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Price")), "html", null, true);
        echo "</td>
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProducts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "    <td>";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute($context["product"], "getDisplayPrice", array(), "method"), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "null", array()), 2 => 1), "method");
            echo "</td>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/prices.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  31 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Prices*/
/*  #*/
/*  # @ListChild (list="comparison_table.data", weight="100")*/
/*  #}*/
/* */
/* <tr class="prices">*/
/*   <td class="title">{{ t('Price') }}</td>*/
/*   {% for product in this.getProducts() %}*/
/*     <td>{{ this.formatPrice(product.getDisplayPrice(), this.null, 1)|raw }}</td>*/
/*   {% endfor %}*/
/* </tr>*/
/* */
