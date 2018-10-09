<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/center/list/parts/body/thumbnail.twig */
class __TwigTemplate_ebaeb8ea0a43c35fce4f65834203b299b4ca65c39df9ba10920f193f88c80bdc extends \XLite\Core\Templating\Twig\Template
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
<td class=\"box-product\">
  <div class=\"quick-look-cell\">
  <div class=\"quick-look-cell-thumbnail\">
    ";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "quick_look.thumbnail", "type" => "nested", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
    <a 
      class=\"product-thumbnail lazy-load\"
      href=\"";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "categoryId", array())), "method"), "html", null, true);
        echo "\">
      ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "isBlurApplicable" => true, "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method"), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "alt" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "name", array()), "className" => "photo"))), "html", null, true);
        echo "
    </a>
  </div>
  </div>
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/center/list/parts/body/thumbnail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 14,  31 => 13,  25 => 10,  19 => 6,);
    }
}
/* {##*/
/*  # Item thumbnail*/
/*  #*/
/*  # @ListChild (list="itemsList.product.list.customer.body", weight="20")*/
/*  #}*/
/* */
/* <td class="box-product">*/
/*   <div class="quick-look-cell">*/
/*   <div class="quick-look-cell-thumbnail">*/
/*     {{ widget_list('quick_look.thumbnail', type='nested', product=this.product) }}*/
/*     <a */
/*       class="product-thumbnail lazy-load"*/
/*       href="{{ this.getProductURL(this.categoryId) }}">*/
/*       {{ widget('\\XLite\\View\\Image', isBlurApplicable=true, image=this.product.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.product.name, className='photo') }}*/
/*     </a>*/
/*   </div>*/
/*   </div>*/
/* </td>*/
/* */
