<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/phrase.all.twig */
class __TwigTemplate_9ee187e45a4ba0b936dc5d18be019aed3c5f403e9e37ed1cd187b48f75fe64df extends \XLite\Core\Templating\Twig\Template
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
  <input type=\"radio\" name=\"including\" id=\"including-all\" value=\"all\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "including", 1 => "all"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"including-all\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("All words")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/phrase.all.twig";
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
/*  # Search phrase : all*/
/*  #*/
/*  # @listChild (list="products.search.conditions.phrase", weight="100")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="radio" name="including" id="including-all" value="all" {% if this.getChecked('including', 'all') %} checked="checked" {% endif %} />*/
/*   <label for="including-all">{{ t('All words') }}</label>*/
/* </li>*/
/* */
