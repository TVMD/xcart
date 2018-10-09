<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.info.twig */
class __TwigTemplate_3c1721d23e5f77a865703003f28a6894ba0b6be0d9e06ec7825e95e3772bfb16 extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-info\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "cart.item.info", "item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())))), "html", null, true);
        echo "
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : info*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="30")*/
/*  #}*/
/* <td class="item-info">*/
/*   {{ widget_list('cart.item.info', item=this.item) }}*/
/* </td>*/
/* */
