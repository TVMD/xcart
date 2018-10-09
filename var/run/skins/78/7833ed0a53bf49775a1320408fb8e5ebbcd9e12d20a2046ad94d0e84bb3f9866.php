<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/operations.twig */
class __TwigTemplate_d912845baaec1de704afd90e419c87cccda0135db3f4392b2c3d616226f8140e extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        $this->startForm("XLite\\View\\Form\\Order\\Operations");        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.operations"))), "html", null, true);
        echo "
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\StickyPanel\\Order\\Admin\\Info"))), "html", null, true);
        echo "
";
        $this->endForm();    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/operations.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 9,  23 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order : operations*/
/*  #*/
/*  # @ListChild (list="order", weight="400")*/
/*  #}*/
/* */
/* {% form 'XLite\\View\\Form\\Order\\Operations' %}*/
/*   {{ widget_list('order.operations') }}*/
/*   {{ widget('XLite\\View\\StickyPanel\\Order\\Admin\\Info') }}*/
/* {% endform %}*/
/* */
