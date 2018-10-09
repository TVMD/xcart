<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.qty.twig */
class __TwigTemplate_1827f0ebd0c523a1bfe95f3344cafab99c50ec64d96ce6b6f98d8f79c9c5b757 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-qty\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "canChangeAmount", array(), "method")) {
            // line 8
            echo "    ";
            $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Update", array("item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "className" => "update-quantity", "validationEngine" => "1"));            // line 9
            echo "      <div>
        ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Product\\QuantityBox", "product" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getProduct", array(), "method"), "fieldValue" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "isCartPage" => "1", "orderItem" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
            echo "
      </div>
    ";
            $this->endForm();            // line 13
            echo "  ";
        } else {
            // line 14
            echo "    <span class=\"non-valid-qty\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAmount", array(), "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 16
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.qty.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  37 => 14,  34 => 13,  29 => 10,  26 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : quantity*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="50")*/
/*  #}*/
/* <td class="item-qty">*/
/*   {% if this.item.canChangeAmount() %}*/
/*     {% form '\\XLite\\View\\Form\\Cart\\Item\\Update' with {item: this.item, className: 'update-quantity', validationEngine: '1'} %}*/
/*       <div>*/
/*         {{ widget('\\XLite\\View\\Product\\QuantityBox', product=this.item.getProduct(), fieldValue=this.item.getAmount(), isCartPage='1', orderItem=this.item) }}*/
/*       </div>*/
/*     {% endform %}*/
/*   {% else %}*/
/*     <span class="non-valid-qty">{{ this.item.getAmount() }}</span>*/
/*   {% endif %}*/
/* </td>*/
/* */
