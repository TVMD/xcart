<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.includedModifiers.twig */
class __TwigTemplate_cc9a2aa965a82c6587788b64a9ec5ccc7bea118f130a6bf6f29cd3c7e7956d8c extends \XLite\Core\Templating\Twig\Template
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
<ul class=\"modifiers included-modifiers\">
  ";
        // line 8
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getItemsIncludeSurchargesTotals", array(), "method")) {
            echo "  
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getItemsIncludeSurchargesTotals", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 10
                echo "      <li class='included-surcharge type-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getType", array(), "method"), "html", null, true);
                echo "-surcharge code-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getCode", array(), "method"), "html", null, true);
                echo "-surcharge'>
        <span class=\"name\">";
                // line 11
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Including X", array("name" => $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getName", array(), "method")))), "html", null, true);
                echo ":</span>
        <span class=\"value\">";
                // line 12
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "cost", array()), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
                echo "
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "  ";
        }
        // line 16
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/review/parts/items.includedModifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  51 => 15,  42 => 12,  38 => 11,  31 => 10,  27 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Checkout : order review step : items : subtotal*/
/*  #*/
/*  # @ListChild (list="checkout.review.selected.items", weight="45")*/
/*  #}*/
/* */
/* <ul class="modifiers included-modifiers">*/
/*   {% if this.cart.getItemsIncludeSurchargesTotals() %}  */
/*     {% for row in this.cart.getItemsIncludeSurchargesTotals() %}*/
/*       <li class='included-surcharge type-{{ row.surcharge.getType() }}-surcharge code-{{row.surcharge.getCode()}}-surcharge'>*/
/*         <span class="name">{{ t('Including X', {'name': row.surcharge.getName()}) }}:</span>*/
/*         <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=row.cost, currency=this.cart.getCurrency()) }}*/
/*       </li>*/
/*     {% endfor %}*/
/*   {% endif %}*/
/* </ul>*/
/* */
