<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/item.name.twig */
class __TwigTemplate_0728fd5cdbcdfb7ff2c906f3e536c9c93f403c6b7d5c670f92c1c31d0ce5a32a extends \XLite\Core\Templating\Twig\Template
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
  <div class=\"item-options\">
    ";
        // line 18
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isViewListVisible", array(0 => "packing_slip.item.name", 1 => array("item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()))), "method")) {
            // line 19
            echo "      <ul class=\"subitem additional simple-list\">
        ";
            // line 20
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.item.name", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
            echo "
      </ul>
    ";
        }
        // line 23
        echo "    ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAttributesVisible", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())), "method")) {
            // line 24
            echo "      <ul class=\"subitem attributes simple-list\">
        <li>";
            // line 25
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Options:")), "html", null, true);
            echo "&nbsp;</li>
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getAttributeValues", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["av"]) {
                // line 27
                echo "          <li class=\"attribute\">
            ";
                // line 28
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["av"], "value", array()), "html", null, true);
                echo "
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['av'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </ul>
    ";
        }
        // line 33
        echo "  </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/item.name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 33,  91 => 31,  82 => 28,  79 => 27,  75 => 26,  71 => 25,  68 => 24,  65 => 23,  59 => 20,  56 => 19,  54 => 18,  50 => 16,  44 => 14,  41 => 13,  35 => 11,  32 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Name item cell*/
/*  #*/
/*  # @ListChild (list="packing_slip.item", weight="20")*/
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
/*   <div class="item-options">*/
/*     {% if this.isViewListVisible('packing_slip.item.name', {'item': this.item}) %}*/
/*       <ul class="subitem additional simple-list">*/
/*         {{ widget_list('packing_slip.item.name', item=this.item) }}*/
/*       </ul>*/
/*     {% endif %}*/
/*     {% if this.isAttributesVisible(this.item) %}*/
/*       <ul class="subitem attributes simple-list">*/
/*         <li>{{ t('Options:') }}&nbsp;</li>*/
/*         {% for av in this.item.getAttributeValues() %}*/
/*           <li class="attribute">*/
/*             {{ av.value }}*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     {% endif %}*/
/*   </div>*/
/* </td>*/
/* */
