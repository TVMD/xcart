<?php

/* /var/www/next/output/xcart/src/skins/admin/profiles/parts/search_form/date_type.logged.twig */
class __TwigTemplate_c954ed84f93eb92725dacbcf54b32d29247217163d44986d63a9967d5883e1c4 extends \XLite\Core\Templating\Twig\Template
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
<li class=\"date-type-l\">
  <input type=\"radio\" name=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldName", array()), "html", null, true);
        echo "\" value=\"L\" id=\"date_type_l\" ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDateTypeSelected", array(0 => "L"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"date_type_l\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Last logged in")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/profiles/parts/search_form/date_type.logged.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 9,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # By last logged date*/
/*  #*/
/*  # @ListChild (list="profiles.search.dateTypes", weight="200")*/
/*  #}*/
/* */
/* <li class="date-type-l">*/
/*   <input type="radio" name="{{ this.fieldName }}" value="L" id="date_type_l" {% if this.isDateTypeSelected('L') %} checked="checked" {% endif %} />*/
/*   <label for="date_type_l">{{ t('Last logged in') }}</label>*/
/* </li>*/
/* */
