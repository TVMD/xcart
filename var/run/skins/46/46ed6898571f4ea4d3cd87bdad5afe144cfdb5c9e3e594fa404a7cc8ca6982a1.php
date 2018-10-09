<?php

/* /var/www/next/output/xcart/src/skins/customer/order/parts/status.twig */
class __TwigTemplate_cc26bd14b6108c4ae13656e338d4a706ee8874cb62d39bac24c001ebfb7dc6ed extends \XLite\Core\Templating\Twig\Template
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
        echo "<div class=\"order-statuses\">
  ";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "order.status"))), "html", null, true);
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/order/parts/status.twig";
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
/*  # Order statuses*/
/*  #*/
/*  # @ListChild (list="order.children", weight="10")*/
/*  #}*/
/* <div class="order-statuses">*/
/*   {{ widget_list('order.status') }}*/
/* </div>*/
/* */
