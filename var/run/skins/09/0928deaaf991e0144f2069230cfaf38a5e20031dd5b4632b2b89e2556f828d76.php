<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.title.twig */
class __TwigTemplate_0c2b1fc6e08ec14e89b4fb324343633e27dbbfc359238e6aedff45c91b2140ed extends \XLite\Core\Templating\Twig\Template
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
<div class=\"title\">";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "method", array()), "getName", array(), "method"), "html", null, true);
        echo "<img src=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('asset')->getCallable(), array("images/spacer.gif")), "html", null, true);
        echo "\" class=\"fade\" alt=\"\" /></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/payment/methods/parts/header.title.twig";
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
/*  # Payment methods list : line : header : title*/
/*  #*/
/*  # @ListChild (list="payment.methods.list.header", weight=200)*/
/*  #}*/
/* */
/* <div class="title">{{ this.method.getName() }}<img src="{{ asset('images/spacer.gif') }}" class="fade" alt="" /></div>*/
/* */
