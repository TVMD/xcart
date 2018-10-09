<?php

/* /var/www/next/output/xcart/src/skins/admin/product/search/parts/by_conditions_parts/by_title.twig */
class __TwigTemplate_78bc210905de4a4f1811e3b0907f449a877e6c4aae2ee9bab5eae927bd1f69fb extends \XLite\Core\Templating\Twig\Template
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
  <input type=\"checkbox\" name=\"by_title\" id=\"by-title\" value=\"Y\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "by_title"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"by-title\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Name")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/product/search/parts/by_conditions_parts/by_title.twig";
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
/*  # @ListChild (list="product.search.conditions.by-keywords", weight="10")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="checkbox" name="by_title" id="by-title" value="Y" {% if this.getCondition('by_title') %} checked="checked" {% endif %} />*/
/*   <label for="by-title">{{ t('Name') }}</label>*/
/* </li>*/
/* */
