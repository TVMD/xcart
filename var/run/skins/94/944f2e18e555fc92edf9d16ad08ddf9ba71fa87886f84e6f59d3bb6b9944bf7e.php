<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/line.header.twig */
class __TwigTemplate_d145f49ef1fbebb547b5e515f4a612fda1545f95ed257828614c1126f9848d96 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"line-header clearfix\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "payment.methods.list.header", "method" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array())))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/line.header.twig";
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
/*  # Payment methods list : line : header*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.line", weight=100)*/
/*  #}*/
/* */
/* <div class="line-header clearfix">*/
/*   {{ widget_list('payment.methods.list.header', method=this.method) }}*/
/* </div>*/
/* */
