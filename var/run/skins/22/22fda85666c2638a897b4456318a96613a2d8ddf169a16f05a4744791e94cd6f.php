<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.total.twig */
class __TwigTemplate_25940bae700283daca77c08d893a89414a374f72d2b671392d5c15b3afcbab45 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"total\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Total")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.total.twig";
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
/*  # Invoice items table head part : Total column*/
/*  #*/
/*  # @ListChild (list="order.items.head", weight="40")*/
/*  #}*/
/* <th class="total">{{ t('Total') }}</th>*/
/* */
