<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FreeShipping/free_ship.label.twig */
class __TwigTemplate_3b11c9adc706e234df40dd0022e8208e868d3197079d6925b82272b119a13e1f extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\FreeShipping\\View\\Product\\Details\\Label", "product" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array())))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FreeShipping/free_ship.label.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Product stock*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="19")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="19")*/
/*  #}*/
/* */
/* {{ widget('\\XLite\\Module\\XC\\FreeShipping\\View\\Product\\Details\\Label', product=this.product) }}*/
/* */
