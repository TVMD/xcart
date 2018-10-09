<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.qty.twig */
class __TwigTemplate_5585bdd35bdee76a3f4bd9e5a919d344f4de2dc1b363a9d7a09dbcfd0a4e5758 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Qty")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.qty.twig";
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
/*  # @ListChild (list="order.items.head", weight="30")*/
/*  #}*/
/* <th class="qty">{{ t('Qty') }}</th>*/
/* */
