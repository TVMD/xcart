<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/BulkEditing/items_list/selected/count.twig */
class __TwigTemplate_aabc89d5a9eb2fd4c837bdfcb908074382847132ec696ad2c463ffc9223dc860 extends \XLite\Core\Templating\Twig\Template
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
        echo "<h2 class=\"count-selected\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("X items selected", array("count" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsCount", array(), "method")))), "html", null, true);
        echo "</h2>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/BulkEditing/items_list/selected/count.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 7,);
    }
}
/* {##*/
/*  # @ListChild (list="itemsList.xc.bulkediting.category.header", weight="100")*/
/*  # @ListChild (list="itemsList.xc.bulkediting.inventory.header", weight="100")*/
/*  # @ListChild (list="itemsList.xc.bulkediting.priceandmembership.header", weight="100")*/
/*  # @ListChild (list="itemsList.xc.bulkediting.shippinginfo.header", weight="100")*/
/*  #}*/
/* <h2 class="count-selected">{{ t('X items selected', {'count': this.getItemsCount()}) }}</h2>*/
/* */
