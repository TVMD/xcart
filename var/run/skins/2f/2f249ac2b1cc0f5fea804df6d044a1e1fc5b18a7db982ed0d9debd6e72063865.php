<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.image.twig */
class __TwigTemplate_84ae9fee7c14944ea3e2fbee53f6b6726dbb14e63c5ced37a1e1057b27f66b1c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "hasImage", array(), "method")) {
            // line 7
            echo "  <td class=\"item-thumbnail\"><a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getURL", array(), "method"), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getImage", array(), "method"), "alt" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getName", array(), "method"), "maxWidth" => "80", "maxHeight" => "80", "centerImage" => "0"))), "html", null, true);
            echo "</a></td>
";
        }
        // line 9
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "hasImage", array(), "method")) {
            // line 10
            echo "  <td class=\"item-thumbnail\">&nbsp;</td>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.image.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 10,  29 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : thumbnail*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="20")*/
/*  #}*/
/* {% if this.item.hasImage() %}*/
/*   <td class="item-thumbnail"><a href="{{ this.item.getURL() }}">{{ widget('\\XLite\\View\\Image', image=this.item.getImage(), alt=this.item.getName(), maxWidth='80', maxHeight='80', centerImage='0') }}</a></td>*/
/* {% endif %}*/
/* {% if not this.item.hasImage() %}*/
/*   <td class="item-thumbnail">&nbsp;</td>*/
/* {% endif %}*/
/* */
