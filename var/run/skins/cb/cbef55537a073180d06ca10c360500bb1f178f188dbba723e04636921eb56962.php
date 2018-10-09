<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/ProductAdvisor/product/parts/new_arrival.twig */
class __TwigTemplate_e13a2bb30c3e3dc492bba0db297d8a15031f8048bd6ae6d70c69194e1a0af17b extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "isNewProduct", array(), "method")) {
            // line 8
            echo "  <tr>
    <td colspan=\"3\">";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("This product will be shown in new arrivals")), "html", null, true);
            echo "</td>
  </tr>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/ProductAdvisor/product/parts/new_arrival.twig";
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
/*  # Product element*/
/*  #*/
/*  # @ListChild (list="product.modify.list", weight="832")*/
/*  #}*/
/* */
/* {% if this.product.isNewProduct() %}*/
/*   <tr>*/
/*     <td colspan="3">{{ t('This product will be shown in new arrivals') }}</td>*/
/*   </tr>*/
/* {% endif %}*/
/* */
