<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/label.twig */
class __TwigTemplate_ff039b502a1526907b837a10b84b31a5893ceabc62ee2417fe707ba789230557 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "participateSale", array(), "method")) {
            // line 8
            echo "  <div class=\"sale-label-product-details\">
    <div class=\"text\">
      ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sale_price.text", "type" => "nested"))), "html", null, true);
            echo "
    </div>
    ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "sale_price.label", "type" => "nested"))), "html", null, true);
            echo "
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 12,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Label (internal list element)*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail", weight="40")*/
/*  #}*/
/* */
/* {% if this.participateSale() %}*/
/*   <div class="sale-label-product-details">*/
/*     <div class="text">*/
/*       {{ widget_list('sale_price.text', type='nested') }}*/
/*     </div>*/
/*     {{ widget_list('sale_price.label', type='nested') }}*/
/*   </div>*/
/* {% endif %}*/
/* */
