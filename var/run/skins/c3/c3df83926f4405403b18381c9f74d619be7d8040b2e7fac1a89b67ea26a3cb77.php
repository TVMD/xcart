<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/phrase.any.twig */
class __TwigTemplate_7ca9d5837b267d4b2b207041e8c86b2a7364f5e787482e6b41d221dfa08fb8bb extends \XLite\Core\Templating\Twig\Template
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
  <input type=\"radio\" name=\"including\" id=\"including-any\" value=\"any\" ";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getChecked", array(0 => "including", 1 => "any"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"including-any\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Any word")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/phrase.any.twig";
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
/*  # Search phrase : any*/
/*  #*/
/*  # @listChild (list="products.search.conditions.phrase", weight="200")*/
/*  #}*/
/* */
/* <li>*/
/*   <input type="radio" name="including" id="including-any" value="any" {% if this.getChecked('including', 'any') %} checked="checked" {% endif %} />*/
/*   <label for="including-any">{{ t('Any word') }}</label>*/
/* </li>*/
/* */
