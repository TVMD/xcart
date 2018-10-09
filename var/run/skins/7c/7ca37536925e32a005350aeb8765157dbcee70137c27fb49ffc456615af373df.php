<?php

/* /var/www/next/output/xcart/src/skins/customer/common/order_status_nowrapper.twig */
class __TwigTemplate_86560be446b5ce3597770f9ba0dc1ba90335661f11a9b59335bbbc6160f9b277 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTitle", array(), "method"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/common/order_status_nowrapper.twig";
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
/*  # Order status label.*/
/*  #*/
/*  # @ListChild (list="order_status.nowrapper", weight="10")*/
/*  #}*/
/* */
/* {{ t(this.getTitle()) }}*/
/* */
