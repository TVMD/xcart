<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/buttons.twig */
class __TwigTemplate_03d8f4f4b03b982552d2f69f8b790411e885dc7aa0f40e871cde0dfd925f890b extends \XLite\Core\Templating\Twig\Template
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
<tr class=\"buttons\">
  <td>
    ";
        // line 9
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductsCount", array(), "method") > 1)) {
            // line 10
            echo "      <input type=\"checkbox\" id=\"diff\" /><label for=\"diff\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Differences only")), "html", null, true);
            echo "</label>
    ";
        }
        // line 12
        echo "  </td>
  ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProducts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 14
            echo "    <td>
      ";
            // line 15
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductButtonWidget", array(0 => $context["product"]), "method"), "html", null, true);
            echo "
    </td>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 18,  42 => 15,  39 => 14,  35 => 13,  32 => 12,  26 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Products*/
/*  #*/
/*  # @ListChild (list="comparison_table.header_fixed", weight="200")*/
/*  #}*/
/* */
/* <tr class="buttons">*/
/*   <td>*/
/*     {% if this.getProductsCount() > 1 %}*/
/*       <input type="checkbox" id="diff" /><label for="diff">{{ t('Differences only') }}</label>*/
/*     {% endif %}*/
/*   </td>*/
/*   {% for product in this.getProducts() %}*/
/*     <td>*/
/*       {{ this.getProductButtonWidget(product) }}*/
/*     </td>*/
/*   {% endfor %}*/
/* </tr>*/
/* */
