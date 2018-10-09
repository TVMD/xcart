<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/addresses.twig */
class __TwigTemplate_d34a9bb776fe90f665293ce4ba93678b20777900e6882f21a451619381d37ad1 extends \XLite\Core\Templating\Twig\Template
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
<table cellspacing=\"0\" class=\"address\">
  <tr>
    ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.addresses"))), "html", null, true);
        echo "
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/addresses/addresses.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Invoice bottom block*/
/*  #*/
/*  # @ListChild (list="packing_slip.base", weight="20")*/
/*  #}*/
/* */
/* <table cellspacing="0" class="address">*/
/*   <tr>*/
/*     {{ widget_list('packing_slip.addresses') }}*/
/*   </tr>*/
/* </table>*/
/* */
