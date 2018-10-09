<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.name.twig */
class __TwigTemplate_e41486548828904474cef21cd2748ecb51310cc6ef4439cf37863ca8edd4df62 extends \XLite\Core\Templating\Twig\Template
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
        echo "<th class=\"item\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Item list")), "html", null, true);
        echo "</th>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/items/items.head.name.twig";
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
/*  # @ListChild (list="order.items.head", weight="10")*/
/*  #}*/
/* <th class="item">{{ t('Item list') }}</th>*/
/* */
