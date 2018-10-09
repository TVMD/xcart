<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.drag-n-drop-handle.twig */
class __TwigTemplate_9c45d1b8bf3fe285446cb699784e89e12e18506e66b6649ae22c2ca09db30d2a extends \XLite\Core\Templating\Twig\Template
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
        // line 9
        echo "
<div class=\"drag-n-drop-handle\">
  ";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAllItemHoverParams", array(), "method")), "method"), "html", null, true);
        echo "
  ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemHoverParams", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["itemParam"]) {
            // line 13
            echo "    <span class=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["itemParam"], "style", array()), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["itemParam"], "text", array()), "html", null, true);
            echo "</span>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itemParam'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.drag-n-drop-handle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 15,  31 => 13,  27 => 12,  23 => 11,  19 => 9,);
    }
}
/* {##*/
/*  # Overlapping box*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="0")*/
/*  # @ListChild (list="itemsList.product.list.customer.info", weight="0")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.info", weight="first")*/
/*  # @ListChild (list="itemsList.product.big_thumbnails.customer.info", weight="first")*/
/*  #}*/
/* */
/* <div class="drag-n-drop-handle">*/
/*   {{ this.displayCommentedData(this.getAllItemHoverParams()) }}*/
/*   {% for itemParam in this.getItemHoverParams() %}*/
/*     <span class="{{ itemParam.style }}">{{ itemParam.text }}</span>*/
/*   {% endfor %}*/
/* </div>*/
/* */
