<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/Coupons/coupons/list/add.twig */
class __TwigTemplate_5343db3a0cfca0a7896fc991dc49aa6992b3f88ecf0e713d1b4b2c0fe9ff2c88 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Link", "location" => call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "coupon")), "label" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add new coupon"))))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/Coupons/coupons/list/add.twig";
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
/*  # Add coupon block*/
/*  #*/
/*  # @ListChild (list="coupons.itemsList.header", zone="admin", weight="100")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Button\\Link', location=url('coupon'), label=t('Add new coupon')) }}*/
/* */
