<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.includedModifiers.twig */
class __TwigTemplate_ba8d2207cc9222363c9bf2d089c7eb415cef0774c99d6b8327f9111ba438f42a extends \XLite\Core\Templating\Twig\Template
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getItemsIncludeSurchargesTotals", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "  <li class='included-surcharge type-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getType", array(), "method"), "html", null, true);
            echo "-surcharge code-";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getCode", array(), "method"), "html", null, true);
            echo "-surcharge'>
    <strong>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Including X", array("name" => $this->getAttribute($this->getAttribute($context["row"], "surcharge", array()), "getName", array(), "method")))), "html", null, true);
            echo ":</strong>
    <span class=\"value\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Surcharge", "surcharge" => $this->getAttribute($context["row"], "cost", array()), "currency" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cart", array()), "getCurrency", array(), "method")))), "html", null, true);
            echo "
  </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/total.includedModifiers.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  33 => 9,  26 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart subtotal*/
/*  #*/
/*  # @ListChild (list="cart.panel.totals", weight="35")*/
/*  #}*/
/* */
/* {% for row in this.cart.getItemsIncludeSurchargesTotals() %}*/
/*   <li class='included-surcharge type-{{ row.surcharge.getType() }}-surcharge code-{{row.surcharge.getCode()}}-surcharge'>*/
/*     <strong>{{ t('Including X', {'name': row.surcharge.getName()}) }}:</strong>*/
/*     <span class="value">{{ widget('XLite\\View\\Surcharge', surcharge=row.cost, currency=this.cart.getCurrency()) }}*/
/*   </li>*/
/* {% endfor %}*/
/* */
