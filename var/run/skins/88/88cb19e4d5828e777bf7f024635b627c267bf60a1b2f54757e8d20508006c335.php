<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/action.statuses.twig */
class __TwigTemplate_4d31a132a2ec5d1d50148e5b910cc7b080ec26d77e9ae0278541d36312d6fc82 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"statuses\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.actions.statuses"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/action.statuses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Payment actions*/
/*  #*/
/*  # @ListChild (list="order.actions", weight="1000")*/
/*  #}*/
/* */
/* <div class="statuses">*/
/*   {{ widget_list('order.actions.statuses') }}*/
/* </div>*/
/* */
