<?php

/* items_list/product/center/grid/body-css-layout.twig */
class __TwigTemplate_3f5554f4707e47d15fc578830e0d15e581e1456ef6409c0af0f89eaaaf96d815 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "itemsList.product.cart"))), "html", null, true);
        echo "

<div class=\"products\">

  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method")) {
            // line 10
            echo "    <ul class=\"products-grid grid-list\">
      ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPageData", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "        <li class=\"product-cell box-product\">
    
          ";
                // line 14
                echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductWidgetContent", array(0 => $context["product"]), "method");
                echo "
    
        </li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNestedViewList", array(0 => "items"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 19
                echo "        <li class=\"product-cell box-product\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", array(), "method"), "html", null, true);
                echo "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
  ";
        }
        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "items_list/product/center/grid/body-css-layout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 23,  66 => 21,  57 => 19,  52 => 18,  42 => 14,  38 => 12,  34 => 11,  31 => 10,  29 => 9,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Products list (grid variant)*/
/*  #}*/
/* */
/* {{ widget_list('itemsList.product.cart') }}*/
/* */
/* <div class="products">*/
/* */
/*   {% if this.getPageData() %}*/
/*     <ul class="products-grid grid-list">*/
/*       {% for product in this.getPageData() %}*/
/*         <li class="product-cell box-product">*/
/*     */
/*           {{ this.getProductWidgetContent(product)|raw }}*/
/*     */
/*         </li>*/
/*       {% endfor %}*/
/*       {% for item in this.getNestedViewList('items') %}*/
/*         <li class="product-cell box-product">{{ item.display() }}</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   {% endif %}*/
/* */
/* </div>*/
/* */
