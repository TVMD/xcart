<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details/you_save.twig */
class __TwigTemplate_8fbc2f90d4122ab9e50f817d47db78680f6b054dfe42f88f3ae09a2b375d86cd extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("you save")), "html", null, true);
        echo " <span class=\"you-save\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "formatPrice", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSaveDifference", array(), "method"), 1 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "null", array()), 2 => 1), "method"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/MarketPrice/details/you_save.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # "You save" label (internal list element)*/
/*  #*/
/*  # @ListChild (list="product.plain_price.tail.market_price.text", weight="200")*/
/*  #}*/
/* {{ t('you save') }} <span class="you-save">{{ this.formatPrice(this.getSaveDifference(), this.null, 1) }}</span>*/
/* */
