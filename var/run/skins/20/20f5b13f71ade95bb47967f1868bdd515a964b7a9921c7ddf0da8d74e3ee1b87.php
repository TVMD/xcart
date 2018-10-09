<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/ProductTags/product/search/parts/advanced.options.tag.twig */
class __TwigTemplate_86312368f00e36958cac9c008b7acc4ce7c5dff78fe7cfe2671a310f6587c8b8 extends \XLite\Core\Templating\Twig\Template
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
<li><label for=\"by-tag\">
  <input type=\"checkbox\" name=\"by_tag\" id=\"by-tag\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "by_tag"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  ";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Tag")), "html", null, true);
        echo "
</label></li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/ProductTags/product/search/parts/advanced.options.tag.twig";
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
/*  # Search in tag*/
/*  #*/
/*  # @listChild (list="products.search.conditions.advanced.options", weight="400")*/
/*  #}*/
/* */
/* <li><label for="by-tag">*/
/*   <input type="checkbox" name="by_tag" id="by-tag" value="Y" {% if this.getChecked('by_tag') %} checked="checked" {% endif %} />*/
/*   {{ t('Tag') }}*/
/* </label></li>*/
/* */
