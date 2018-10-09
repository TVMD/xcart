<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/head/head.twig */
class __TwigTemplate_0ed2968cdad87024851400b26438816a452e00e33837d363f497bd7c3e5a8cdd extends \XLite\Core\Templating\Twig\Template
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
        echo "<table cellspacing=\"0\" class=\"header\">
  <tr>
    ";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.head"))), "html", null, true);
        echo "
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/head/head.twig";
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
/*  # Invoice head*/
/*  #*/
/*  # @ListChild (list="packing_slip.base", weight="10")*/
/*  #}*/
/* <table cellspacing="0" class="header">*/
/*   <tr>*/
/*     {{ widget_list('packing_slip.head') }}*/
/*   </tr>*/
/* </table>*/
/* */
