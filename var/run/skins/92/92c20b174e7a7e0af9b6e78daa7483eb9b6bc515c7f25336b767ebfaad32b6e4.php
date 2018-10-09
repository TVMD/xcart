<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.price.twig */
class __TwigTemplate_5fe0833b537778318932992de2112fb260abd136558d2f7e34158178cd3036b0 extends \XLite\Core\Templating\Twig\Template
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
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.price.twig";
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
/*  # @ListChild (list="order.items.head", weight="20")*/
/*  #}*/
/* <th class="price">{{ t('Price') }}</th>*/
/* */
