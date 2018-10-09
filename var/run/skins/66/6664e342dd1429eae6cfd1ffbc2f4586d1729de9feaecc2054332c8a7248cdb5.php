<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.head.total.twig */
class __TwigTemplate_86d33fc5c0b7cf74c2225a6d87a2b966c19906fddd7f114ed8e4be3cb7ce4736 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.head.total.twig";
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
/*  # @ListChild (list="invoice.items.head", weight="40")*/
/*  #}*/
/* <th class="total">{{ t('Total') }}</th>*/
/* */
