<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/weight.twig */
class __TwigTemplate_1995bf80bafd42a09b4b95d27d0011c124508a315f6d1bf1d818701238a5a1a8 extends \XLite\Core\Templating\Twig\Template
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
<tr class=\"weight\">
  <td class=\"title\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Weight")), "html", null, true);
        echo "</td>
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProducts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "    <td>";
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatWeight", array(0 => $this->getAttribute($context["product"], "getWeight", array(), "method")), "method");
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
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/weight.twig";
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
/*  # Weight */
/*  #*/
/*  # @ListChild (list="comparison_table.data", weight="200")*/
/*  #}*/
/* */
/* <tr class="weight">*/
/*   <td class="title">{{ t('Weight') }}</td>*/
/*   {% for product in this.getProducts() %}*/
/*     <td>{{ this.formatWeight(product.getWeight())|raw }}</td>*/
/*   {% endfor %}*/
/* </tr>*/
/* */
