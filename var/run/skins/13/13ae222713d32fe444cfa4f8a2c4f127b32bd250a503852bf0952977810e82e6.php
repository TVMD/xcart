<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/XC/ProductTags/product/search/parts/by_conditions_parts/by_tag.twig */
class __TwigTemplate_776bc3f3cc159f47ad794db108a6993352a9c2da2fe83f0df6588730b07c57f4 extends \XLite\Core\Templating\Twig\Template
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
<li>
  <input type=\"checkbox\" name=\"by_tag\" id=\"by-tag\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "by_tag"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"by-tag\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Tag")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/XC/ProductTags/product/search/parts/by_conditions_parts/by_tag.twig";
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
/*  # By tag condition part*/
/*  #*/
/*  # @ListChild (list="product.search.conditions.by-keywords", weight="40")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="checkbox" name="by_tag" id="by-tag" value="Y" {% if this.getCondition('by_tag') %} checked="checked" {% endif %} />*/
/*   <label for="by-tag">{{ t('Tag') }}</label>*/
/* </li>*/
/* */
