<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items/item.name.twig */
class __TwigTemplate_91868fe092d02e271947987fe42766e49459a43b7b0e5e3c2e4dbb0023b70ec8 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item\">
  ";
        // line 7
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method")) {
            // line 8
            echo "    <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
            echo "\" class=\"item-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
            echo "</a>
  ";
        }
        // line 10
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method")) {
            // line 11
            echo "    <span class=\"item-name\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 13
        echo "  ";
        if ( !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "product", array()), "isPersistent", array(), "method")) {
            // line 14
            echo "    <span class=\"deleted-product-note\">(";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("deleted")), "html", null, true);
            echo ")</span>
  ";
        }
        // line 16
        echo "
  ";
        // line 17
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViewListVisible", array(0 => "invoice.item.name", 1 => array("item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()))), "method")) {
            // line 18
            echo "    <ul class=\"subitem additional simple-list\">
    ";
            // line 19
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "invoice.item.name", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
            echo "
    </ul>
  ";
        }
        // line 22
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items/item.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 22,  58 => 19,  55 => 18,  53 => 17,  50 => 16,  44 => 14,  41 => 13,  35 => 11,  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Name item cell*/
/*  #*/
/*  # @ListChild (list="order.item", weight="10")*/
/*  #}*/
/* <td class="item">*/
/*   {% if this.item.getURL() %}*/
/*     <a href="{{ this.item.getURL() }}" class="item-name">{{ this.item.getName() }}</a>*/
/*   {% endif %}*/
/*   {% if not this.item.getURL() %}*/
/*     <span class="item-name">{{ this.item.getName() }}</span>*/
/*   {% endif %}*/
/*   {% if not this.item.product.isPersistent() %}*/
/*     <span class="deleted-product-note">({{ t('deleted') }})</span>*/
/*   {% endif %}*/
/* */
/*   {% if this.isViewListVisible('invoice.item.name', {'item': this.item}) %}*/
/*     <ul class="subitem additional simple-list">*/
/*     {{ widget_list('invoice.item.name', item=this.item) }}*/
/*     </ul>*/
/*   {% endif %}*/
/* </td>*/
/* */
