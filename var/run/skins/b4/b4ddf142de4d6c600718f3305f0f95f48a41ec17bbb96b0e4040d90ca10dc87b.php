<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.info.buttons.twig */
class __TwigTemplate_198165e3b01b511bd3f4878b6737c72b601bd87530b1ab48a6b010a51de6348a extends \XLite\Core\Templating\Twig\Template
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
<div class=\"product-buttons shade-base\">
  ";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isProductAdded", array(), "method")) {
            // line 10
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "buttons-added", "type" => "nested"))), "html", null, true);
            echo "
  ";
        } else {
            // line 12
            echo "    ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "buttons", "type" => "nested"))), "html", null, true);
            echo "
  ";
        }
        // line 14
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.info.buttons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  31 => 12,  25 => 10,  23 => 9,  19 => 7,);
    }
}
/* {##*/
/*  # Product details buttons block*/
/*  #*/
/*  # @ListChild (list="product.details.page.info", weight="100")*/
/*  # @ListChild (list="product.details.quicklook.info", weight="100")*/
/*  #}*/
/* */
/* <div class="product-buttons shade-base">*/
/*   {% if this.isProductAdded() %}*/
/*     {{ widget_list('buttons-added', type='nested') }}*/
/*   {% else %}*/
/*     {{ widget_list('buttons', type='nested') }}*/
/*   {% endif %}*/
/* </div>*/
/* */
