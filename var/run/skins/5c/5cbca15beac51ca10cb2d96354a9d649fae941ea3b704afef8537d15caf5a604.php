<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.info.weight.twig */
class __TwigTemplate_cbbec7053c074ec7b12f9fda03bd78c42724ac32ab92e5d08b64dfbfa7cdae7a extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getWeight", array(), "method")) {
            // line 7
            echo "  <p class=\"item-weight\">
    <span>";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Weight")), "html", null, true);
            echo ":</span>
    ";
            // line 9
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatWeight", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getWeight", array(), "method")), "method");
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.info.weight.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  24 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item weight block*/
/*  #*/
/*  # @ListChild (list="cart.item.info", weight="30")*/
/*  #}*/
/* {% if this.item.getWeight() %}*/
/*   <p class="item-weight">*/
/*     <span>{{ t('Weight') }}:</span>*/
/*     {{ this.formatWeight(this.item.getWeight())|raw }}*/
/*   </p>*/
/* {% endif %}*/
/* */
