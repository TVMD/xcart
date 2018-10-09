<?php

/* /var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/footer/footer.twig */
class __TwigTemplate_b2b10b67fe5d215d8dd071a90250a02605fc9f156aadd522eaa1e6a34f4368c1 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "packing_slip.footer"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/order/packing_slip/parts/footer/footer.twig";
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
/*  # Order footer*/
/*  #*/
/*  # @ListChild (list="packing_slip.base", weight="60")*/
/*  #}*/
/* */
/* {{ widget_list('packing_slip.footer') }}*/
/* */
