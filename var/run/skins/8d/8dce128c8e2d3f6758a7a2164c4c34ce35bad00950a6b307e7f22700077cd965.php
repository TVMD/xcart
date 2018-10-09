<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.options.sku.twig */
class __TwigTemplate_3ce4a966ee31f5fee9ff45de8eefe9c7d60a76f6639f61c08ac81b2f10d14c69 extends \XLite\Core\Templating\Twig\Template
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
<li><label for=\"by-sku\">
  <input type=\"checkbox\" name=\"by_sku\" id=\"by-sku\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "by_sku"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("SKU")), "html", null, true);
        echo "
</label></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.options.sku.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Search in SKU*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced.options", weight="300")*/
/*  #}*/
/* */
/* <li><label for="by-sku">*/
/*   <input type="checkbox" name="by_sku" id="by-sku" value="Y" {% if this.getChecked('by_sku') %} checked="checked" {% endif %} />*/
/*   {{ t('SKU') }}*/
/* </label></li>*/
/* */
