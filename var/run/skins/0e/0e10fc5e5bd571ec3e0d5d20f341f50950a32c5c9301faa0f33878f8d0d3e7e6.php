<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/product_name.twig */
class __TwigTemplate_b7e2580258d8a47d3d2467b060fda37e54779ee0a99f437625dab3d7169a9d8d extends \XLite\Core\Templating\Twig\Template
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
<tr class=\"names\">
  <td><div>&nbsp;</div></td>
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProducts", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 10
            echo "    <td>
      <div>
        <a target=\"_blank\" href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "product", "", array("product_id" => $this->getAttribute($context["product"], "product_id", array())))), "html", null, true);
            echo "\"><span>";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</span></a>
        <img src=\"";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
            echo "\" class=\"right-fade\" alt=\"\" />
      </div>
    </td>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ProductComparison/comparison_table/parts/product_name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 17,  38 => 13,  32 => 12,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Products*/
/*  #*/
/*  # @ListChild (list="comparison_table.header_fixed", weight="100")*/
/*  #}*/
/* */
/* <tr class="names">*/
/*   <td><div>&nbsp;</div></td>*/
/*   {% for product in this.getProducts() %}*/
/*     <td>*/
/*       <div>*/
/*         <a target="_blank" href="{{ url('product', '', {'product_id': product.product_id}) }}"><span>{{ product.name }}</span></a>*/
/*         <img src="{{ asset('images/spacer.gif') }}" class="right-fade" alt="" />*/
/*       </div>*/
/*     </td>*/
/*   {% endfor %}*/
/* </tr>*/
/* */
