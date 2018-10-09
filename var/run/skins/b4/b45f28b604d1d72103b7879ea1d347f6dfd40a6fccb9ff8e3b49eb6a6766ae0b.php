<?php

/* /var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-main-attributes.twig */
class __TwigTemplate_413718dcd61d86e14390e3fb263411c74bbce59e715aa21120bdc59e4bab2b95 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getAttrSepTab", array(), "method")) {
            // line 8
            echo "  <ul class=\"extra-fields other-attributes\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "product.details.common.product-attributes.attributes"))), "html", null, true);
            echo "
  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/details/parts/common.product-main-attributes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Product details attributes block*/
/*  #*/
/*  # @ListChild (list="product.details.page.tab.description", weight="100")*/
/*  #}*/
/* */
/* {% if not this.product.getAttrSepTab() %}*/
/*   <ul class="extra-fields other-attributes">*/
/*     {{ widget_list('product.details.common.product-attributes.attributes') }}*/
/*   </ul>*/
/* {% endif %}*/
/* */
