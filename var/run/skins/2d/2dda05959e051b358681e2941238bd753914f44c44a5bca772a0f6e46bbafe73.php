<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/title.twig */
class __TwigTemplate_8c699ac059599b2d25127334bc62dc22ba7e1bec9526a84695fc24bbfb44703a extends \XLite\Core\Templating\Twig\Template
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
<h1>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Order X", array("id" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array()), "getOrderNumber", array(), "method")))), "html", null, true);
        echo "</h1>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/title.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Order : title*/
/*  #*/
/*  # @ListChild (list="order.title.row", weight="100")*/
/*  #}*/
/* */
/* <h1>{{ t('Order X', {'id': this.order.getOrderNumber()}) }}</h1>*/
/* */
