<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items_bottom_box.twig */
class __TwigTemplate_791ae8bd2e58c9b82e3e10c0c72a9c02432ae4143de724dda2335919847037ee extends \XLite\Core\Templating\Twig\Template
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
<div class=\"items-bottom clearfix\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.items.bottom"))), "html", null, true);
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items_bottom_box.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Items bottom*/
/*  #*/
/*  # @ListChild (list="order.items.wrapper", weight="100")*/
/*  #}*/
/* */
/* <div class="items-bottom clearfix">*/
/*   {{ widget_list('order.items.bottom') }}*/
/* </div>*/
/* */
/* */
