<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/action.payment_actions.twig */
class __TwigTemplate_2ad81c8030b7dd4c3ffe71e5a44347307f81c21280fb6ffda762e8079e70dcfb extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Order\\Details\\Admin\\PaymentActions", "order" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "order", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/action.payment_actions.twig";
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
/*  # Payment actions*/
/*  #*/
/*  # @ListChild (list="order.actions.paymentActionsRow", weight="200")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\View\\Order\\Details\\Admin\\PaymentActions', order=this.order) }}*/
/* */
