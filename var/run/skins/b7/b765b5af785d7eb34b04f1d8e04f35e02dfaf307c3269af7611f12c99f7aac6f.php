<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.options.title.twig */
class __TwigTemplate_437ed79c7b6e7d524c975f163446eda0798d935f47c7f3779f450be4da628490 extends \XLite\Core\Templating\Twig\Template
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
<li><label for=\"by-title\">
  <input type=\"checkbox\" name=\"by_title\" id=\"by-title\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "by_title"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Product Title")), "html", null, true);
        echo "
</label></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/advanced.options.title.twig";
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
/*  # Search in title*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced.options", weight="100")*/
/*  #}*/
/* */
/* <li><label for="by-title">*/
/*   <input type="checkbox" name="by_title" id="by-title" value="Y" {% if this.getChecked('by_title') %} checked="checked" {% endif %} />*/
/*   {{ t('Product Title') }}*/
/* </label></li>*/
/* */
