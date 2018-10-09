<?php

/* /var/www/next/output/xcart/src/skins/admin/product/search/parts/by_conditions_parts/by_description.twig */
class __TwigTemplate_7dfa00aa4f4e0897cbe666c5f21175e4c22f9ff4d869ca0236091042e8157aba extends \XLite\Core\Templating\Twig\Template
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
  <input type=\"checkbox\" name=\"by_descr\" id=\"by-descr\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "by_descr"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"by-descr\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Description")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/product/search/parts/by_conditions_parts/by_description.twig";
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
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="product.search.conditions.by-keywords", weight="30")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="checkbox" name="by_descr" id="by-descr" value="Y" {% if this.getCondition('by_descr') %} checked="checked" {% endif %} />*/
/*   <label for="by-descr">{{ t('Description') }}</label>*/
/* </li>*/
/* */
