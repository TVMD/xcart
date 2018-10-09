<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-thumbnail-aligned-top.twig */
class __TwigTemplate_a481c52d414a4f4efa78b890249f20b5842130606d9c12f39c1eea1148fd3ecf extends \XLite\Core\Templating\Twig\Template
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
        echo "<a 
  href=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
        echo "\"
  class=\"product-thumbnail lazy-load\">
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "isBlurApplicable" => true, "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method"), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "alt" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array()), "verticalAlign" => "top", "className" => "photo"))), "html", null, true);
        echo "
</a>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.product-thumbnail-aligned-top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Item thumbnail*/
/*  #*/
/*  # @ListChild (list="itemsList.product.list.customer.photo", weight="10")*/
/*  #}*/
/* <a */
/*   href="{{ this.getProductURL(this.categoryId) }}"*/
/*   class="product-thumbnail lazy-load">*/
/*   {{ widget('\\XLite\\View\\Image', isBlurApplicable=true, image=this.product.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.product.name, verticalAlign='top', className='photo') }}*/
/* </a>*/
/* */
