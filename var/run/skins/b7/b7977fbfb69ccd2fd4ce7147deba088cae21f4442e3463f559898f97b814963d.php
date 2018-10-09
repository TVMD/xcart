<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.head.qty.twig */
class __TwigTemplate_a29e570d92bfc510c7dbeb5a1b8d6b21eadb0bbd412694c9c1b5b7a4a28b682a extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.head.qty.twig";
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
/*  # @ListChild (list="invoice.items.head", weight="30")*/
/*  #}*/
/* <th class="qty">{{ t('Qty') }}</th>*/
/* */
