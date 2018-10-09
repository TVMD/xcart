<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/model/table/shipping/methods/cell.rates.twig */
class __TwigTemplate_67666efe416e0dd84000c4357b875f6aead9d87a2c99b0db3ba2cd806e793f98 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "hasRates", array(), "method")) {
            // line 8
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "shipping_rates", "", array("methodid" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getMethodId", array(), "method")))), "html", null, true);
            echo "\" class=\"rates\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Click to edit rates")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Edit rates (X)", array("count" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getRatesCount", array(), "method")))), "html", null, true);
            echo "</a>
";
        }
        // line 10
        echo "
";
        // line 11
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "hasRates", array(), "method")) {
            // line 12
            echo "  <a href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "shipping_rates", "", array("methodid" => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "entity", array()), "getMethodId", array(), "method")))), "html", null, true);
            echo "#addmarkup\" class=\"rates no-rates\" title=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Click to add rates")), "html", null, true);
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add rates")), "html", null, true);
            echo "</a>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/model/table/shipping/methods/cell.rates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  37 => 11,  34 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping rates link*/
/*  #*/
/*  # @ListChild (list="itemsList.shipping-methods.cell.rates", weight="100")*/
/*  #}*/
/* */
/* {% if this.entity.hasRates() %}*/
/*   <a href="{{ url('shipping_rates', '', {'methodid': this.entity.getMethodId()}) }}" class="rates" title="{{ t('Click to edit rates') }}">{{ t('Edit rates (X)', {'count': this.entity.getRatesCount()}) }}</a>*/
/* {% endif %}*/
/* */
/* {% if not this.entity.hasRates() %}*/
/*   <a href="{{ url('shipping_rates', '', {'methodid': this.entity.getMethodId()}) }}#addmarkup" class="rates no-rates" title="{{ t('Click to add rates') }}">{{ t('Add rates') }}</a>*/
/* {% endif %}*/
/* */
