<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/items.head.sku.twig */
class __TwigTemplate_303d98000751b96be92dccc94fafc8c8471fedbe5bc48fdec9322eea27713d35 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"sku\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("SKU")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/items.head.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Invoice items table head part : Name column*/
/*  #*/
/*  # @ListChild (list="packing_slip.items.head", weight="10")*/
/*  #}*/
/* <th class="sku">{{ t('SKU') }}</th>*/
/* */
