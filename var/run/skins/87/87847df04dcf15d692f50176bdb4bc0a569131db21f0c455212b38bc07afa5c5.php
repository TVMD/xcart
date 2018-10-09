<?php

/* /var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.head.price.twig */
class __TwigTemplate_081b6cb3a273470cb5fe24122dccd5921a5ed39e607ec8097f69f8e264ddeeb0 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"price\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Price")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/common/order/invoice/parts/items/items.head.price.twig";
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
/*  # Invoice items table head part : Price column*/
/*  #*/
/*  # @ListChild (list="invoice.items.head", weight="20")*/
/*  #}*/
/* <th class="price">{{ t('Price') }}</th>*/
/* */
