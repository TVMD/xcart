<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/details/sale_price.twig */
class __TwigTemplate_768230aacb3ac6e471d72f139e26a57ce024e001a599f442244c14faf5255d7b extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Old price")), "html", null, true);
        echo ": <span class=\"value\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getOldPrice", array(), "method"), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "null", array()), 2 => 1), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/Sale/details/sale_price.twig";
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
/*  # Sale price (internal list element)*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail.sale_price.text", weight="100")*/
/*  #}*/
/* */
/* {{ t('Old price') }}: <span class="value">{{ this.formatPrice(this.getOldPrice(), this.null, 1) }}</span>*/
/* */
