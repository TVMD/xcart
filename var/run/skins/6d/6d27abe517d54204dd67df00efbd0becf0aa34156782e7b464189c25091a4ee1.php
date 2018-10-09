<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Coupons/item.freeship.twig */
class __TwigTemplate_3ff0efb8343269c40a3cf0bf6c839a886051df131de929aed64b61b4e2bd63f2 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "isFreeShipping", array(), "method")) {
            // line 8
            echo "  <p class=\"item-freeship\">
  ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("FREE SHIPPING")), "html", null, true);
            echo "
  </p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Coupons/item.freeship.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : main*/
/*  #*/
/*  # @ListChild (list="cart.item.info", weight="1000")*/
/*  #}*/
/* */
/* {% if this.item.isFreeShipping() %}*/
/*   <p class="item-freeship">*/
/*   {{ t('FREE SHIPPING') }}*/
/*   </p>*/
/* {% endif %}*/
/* */
