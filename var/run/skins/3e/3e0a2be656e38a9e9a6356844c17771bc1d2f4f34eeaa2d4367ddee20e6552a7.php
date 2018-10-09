<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.labels.twig */
class __TwigTemplate_6675ac3995a12a321f7dfcd70ae77add6f701697a7c4355298eb69751616727c extends \XLite\Core\Templating\Twig\Template
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
        // line 12
        echo "
";
        // line 13
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Labels", "labels" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLabels", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.labels.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 13,  19 => 12,);
    }
}
/* {##*/
/*  # Labels list*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.info", weight="998")*/
/*  # @ListChild (list="itemsList.product.small_thumbnails.customer.details", weight="30")*/
/*  # @ListChild (list="itemsList.product.list.customer.photo", weight="998")*/
/*  # @ListChild (list="itemsList.product.table.customer.columns", weight="25")*/
/*  # @ListChild (list="itemsList.product.big_thumbnails.customer.info", weight="998")*/
/*  # @ListChild (list="productBlock.info.photo", weight="998")*/
/*  # @ListChild (list="product.details.page.image", weight="17")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Labels', labels=this.getLabels()) }}*/
/* */
