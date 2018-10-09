<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/model/table/order_item/restore.twig */
class __TwigTemplate_18a0929f9601eb0185f5608cbe62f1a5f26b00bd7c662607a06f12635e7f78b8 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div class=\"restore-orig-price\" data-orig-price=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOriginalPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), "html", null, true);
        echo "\">
  <i class=\"fa fa-money\" title=\"";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Current price for the selected configuration and quantity: X", array("price" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOriginalPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array())), "method"), 1 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "currency", array())), "method")))), "html", null, true);
        echo "\"></i>
  <input type=\"hidden\" name=\"auto[items][";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "item_id", array()), "html", null, true);
        echo "][price]\" ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAutoItem", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), 1 => "price"), "method")) {
            echo "value=\"1\"";
        } else {
            echo "value=\"\"";
        }
        echo " />
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/model/table/order_item/restore.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 10,  26 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Total cell*/
/*  #*/
/*  # @ListChild (list="itemsList.orderitem.cell.price", weight="100")*/
/*  # @ListChild (list="itemsList.orderitem.dumpCell.price", weight="100")*/
/*  #}*/
/* */
/* <div class="restore-orig-price" data-orig-price="{{ this.getOriginalPrice(this.entity) }}">*/
/*   <i class="fa fa-money" title="{{ t('Current price for the selected configuration and quantity: X', {'price': this.formatPrice(this.getOriginalPrice(this.entity), this.order.currency)}) }}"></i>*/
/*   <input type="hidden" name="auto[items][{{ this.entity.item_id }}][price]" {% if this.isAutoItem(this.entity, 'price') %}value="1"{% else %}value=""{% endif %} />*/
/* </div>*/
/* */
