<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/items.head.qty.twig */
class __TwigTemplate_399f58b21b510a9596ccdd4fe29153460351c7dba255ab7f761cde0ff35dc63c extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"qty\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Order QTY")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/body/items/items.head.qty.twig";
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
/*  # Invoice items table head part : Quantity column*/
/*  #*/
/*  # @ListChild (list="packing_slip.items.head", weight="30")*/
/*  #}*/
/* <th class="qty">{{ t('Order QTY') }}</th>*/
/* */
