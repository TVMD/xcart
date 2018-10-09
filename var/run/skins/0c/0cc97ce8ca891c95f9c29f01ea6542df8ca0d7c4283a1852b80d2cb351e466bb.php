<?php

/* /var/www/next/output/xcart/src/skins/admin/order/page/parts/title.box.twig */
class __TwigTemplate_a0223c3a081ecd27ba06e8f4364c5ad8e8ff1c8d012ac5e65540ad00b8227f6b extends \XLite\Core\Templating\Twig\Template
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
<div class=\"title-box\">
  ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.title.box"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/page/parts/title.box.twig";
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
/*  # Order : title box*/
/*  #*/
/*  # @ListChild (list="order.title.row", weight="200")*/
/*  #}*/
/* */
/* <div class="title-box">*/
/*   {{ widget_list('order.title.box') }}*/
/* </div>*/
/* */
