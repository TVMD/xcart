<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/line.row.twig */
class __TwigTemplate_441675b9ad8c54eb88e1bf7367fe7542598af3b0088225535cf78e2f1b88d81f extends \XLite\Core\Templating\Twig\Template
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
<div class=\"line-row clearfix\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "payment.methods.list.row", "method" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/line.row.twig";
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
/*  # Payment methods list : line : row*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.line", weight=200)*/
/*  #}*/
/* */
/* <div class="line-row clearfix">*/
/*   {{ widget_list('payment.methods.list.row', method=this.method) }}*/
/* </div>*/
/* */
