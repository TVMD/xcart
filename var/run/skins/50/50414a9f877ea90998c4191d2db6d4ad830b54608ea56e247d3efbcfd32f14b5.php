<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.products.twig */
class __TwigTemplate_ff62fa77d83ddef12f2d73866382ac10f3b210be4ee709779cb86a845736ff3a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"products\">

  <table class=\"products-table\" cellspacing=\"0\">

    <tr>
      ";
        // line 12
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "capost_create_return.form.captions"))), "html", null, true);
        echo "
    </tr>

    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "      <tr class=\"product-cell product\">
        ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getInheritedViewList", array(0 => "capost_create_return.form.columns", 1 => array("item" => $context["item"])), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 18
                echo "          <td>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["column"], "display", array(), "method"), "html", null, true);
                echo "</td>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
  </table>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/CanadaPost/products_return/create/parts/main.form.products.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 22,  53 => 20,  44 => 18,  40 => 17,  37 => 16,  33 => 15,  27 => 12,  19 => 6,);
    }
}
/* {##*/
/*  # Create return :: form :: products*/
/*  #*/
/*  # @ListChild (list="capost_create_return.form", weight="100")*/
/*  #}*/
/* */
/* <div class="products">*/
/* */
/*   <table class="products-table" cellspacing="0">*/
/* */
/*     <tr>*/
/*       {{ widget_list('capost_create_return.form.captions') }}*/
/*     </tr>*/
/* */
/*     {% for item in this.getItems() %}*/
/*       <tr class="product-cell product">*/
/*         {% for column in this.getInheritedViewList('capost_create_return.form.columns', {'item': item}) %}*/
/*           <td>{{ column.display() }}</td>*/
/*         {% endfor %}*/
/*       </tr>*/
/*     {% endfor %}*/
/* */
/*   </table>*/
/* */
/* </div>*/
/* */
