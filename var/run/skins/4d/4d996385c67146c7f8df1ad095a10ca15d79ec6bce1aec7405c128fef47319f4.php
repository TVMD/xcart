<?php

/* modules/XC/ProductComparison/compare/products/body.twig */
class __TwigTemplate_74cf1ec04013641d9588a86c61408166c8d7448204c3270a8f5b5a4a20be8bd7 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "<div class=\"add-to-compare products compare-checkbox\">
    <input id=\"";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCheckboxId", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array())), "method"), "html", null, true);
        echo "\" type=\"checkbox\" data-id=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array()), "html", null, true);
        echo "\"";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isChecked", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array())), "method")) {
            echo " checked=\"checked\"";
        }
        echo " />
    <label for=\"";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCheckboxId", array(0 => $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "product_id", array())), "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Add to compare")), "html", null, true);
        echo "\"></label>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/compare/products/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Body*/
/*  #}*/
/* <div class="add-to-compare products compare-checkbox">*/
/*     <input id="{{ this.getCheckboxId(this.product.product_id) }}" type="checkbox" data-id="{{ this.product.product_id }}"{% if this.isChecked(this.product.product_id) %} checked="checked"{% endif %} />*/
/*     <label for="{{ this.getCheckboxId(this.product.product_id) }}" title="{{ t('Add to compare') }}"></label>*/
/* </div>*/
/* */
