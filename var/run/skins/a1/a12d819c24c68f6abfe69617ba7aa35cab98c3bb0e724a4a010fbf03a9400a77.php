<?php

/* /var/www/next/output/xcart/src/skins/admin/shipping/methods.status.twig */
class __TwigTemplate_9f0bf873ca6850056c1f3e9be0608879beb957dba72b9be3d04ed8a3cbb23748 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Shipping\\CarrierStatus", "method" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getMethod", array(), "method")))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/shipping/methods.status.twig";
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
/*  # Shipping methods management page main template*/
/*  #*/
/*  # @ListChild (list="itemsList.shipping-methods.header", weight="10")*/
/*  #}*/
/* */
/* {{ widget('XLite\\View\\Shipping\\CarrierStatus', method=this.getMethod()) }}*/
/* */
