<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/parts/info.twig */
class __TwigTemplate_afe7efe7936936f3d70fd9287c7776fe3bb352be79f1445be2274e7c52f9d08a extends \XLite\Core\Templating\Twig\Template
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
        // line 5
        echo "<div class=\"product-photo\">
  <a href=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(), "method"), "html", null, true);
        echo "\"
     class=\"product-thumbnail lazy-load\">
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "isBlurApplicable" => true, "image" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getImage", array(), "method"), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconAlt", array(), "method"), "className" => "photo"))), "html", null, true);
        echo "
  </a>
</div>

<div class=\"recently-viewed-product-details hidden\">
  <div class=\"products recently-viewed-in-popover\">
    <h5><a href=\"";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getProductURL", array(), "method"), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getName", array(), "method"), "html", null, true);
        echo "</a></h5>
    <div class=\"price\">
      ";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Price", "allowRange" => true, "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "displayOnlyPrice" => "1"))), "html", null, true);
        echo "
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/ProductAdvisor/parts/info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 16,  36 => 14,  27 => 8,  22 => 6,  19 => 5,);
    }
}
/* {##*/
/*  # Products list item*/
/*  # @ListChild (list="itemsList.product.grid.customer.recently.info", weight="100")*/
/*  #}*/
/* <div class="product-photo">*/
/*   <a href="{{ this.getProductURL() }}"*/
/*      class="product-thumbnail lazy-load">*/
/*     {{ widget('\\XLite\\View\\Image', isBlurApplicable=true, image=this.product.getImage(), maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), alt=this.getIconAlt(), className='photo') }}*/
/*   </a>*/
/* </div>*/
/* */
/* <div class="recently-viewed-product-details hidden">*/
/*   <div class="products recently-viewed-in-popover">*/
/*     <h5><a href="{{ this.getProductURL() }}">{{ this.product.getName() }}</a></h5>*/
/*     <div class="price">*/
/*       {{ widget('\\XLite\\View\\Price', allowRange=true, product=this.product, displayOnlyPrice='1') }}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
