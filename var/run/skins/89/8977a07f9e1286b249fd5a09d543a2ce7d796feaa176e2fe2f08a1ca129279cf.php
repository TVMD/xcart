<?php

/* /var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.remove.twig */
class __TwigTemplate_ed894fe8f05b3c32e7c009a62210f39b2b4652a600092f9f04d235dbdb9af11f extends \XLite\Core\Templating\Twig\Template
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
        echo "<td class=\"item-remove delete-from-list\">
  ";
        // line 7
        $this->startForm("\\XLite\\View\\Form\\Cart\\Item\\Delete", array("item" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array())));        // line 8
        echo "    <div>";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Button\\Image", "label" => "Delete item", "style" => "remove", "jsCode" => "return jQuery(this).closest('form').submit();"))), "html", null, true);
        echo "</div>
  ";
        $this->endForm();        // line 10
        echo "</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/shopping_cart/parts/item.remove.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shopping cart item : main*/
/*  #*/
/*  # @ListChild (list="cart.item", weight="10")*/
/*  #}*/
/* <td class="item-remove delete-from-list">*/
/*   {% form '\\XLite\\View\\Form\\Cart\\Item\\Delete' with {item: this.item} %}*/
/*     <div>{{ widget('\\XLite\\View\\Button\\Image', label='Delete item', style='remove', jsCode='return jQuery(this).closest(\'form\').submit();') }}</div>*/
/*   {% endform %}*/
/* </td>*/
/* */
