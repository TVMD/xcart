<?php

/* /var/www/next/output/xcart/src/skins/admin/profiles/parts/search_form/date_type.registered.twig */
class __TwigTemplate_80502f196365b468aa399647fb29c21752f7d1948a58655c17d963b03597f59a extends \XLite\Core\Templating\Twig\Template
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
<li class=\"date-type-r\">
  <input type=\"radio\" name=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "fieldName", array()), "html", null, true);
        echo "\" value=\"R\" id=\"date_type_r\" ";
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDateTypeSelected", array(0 => "R"), "method")) {
            echo " checked=\"checked\" ";
        }
        echo " />
  <label for=\"date_type_r\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Registered")), "html", null, true);
        echo "</label>
</li>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/profiles/parts/search_form/date_type.registered.twig";
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
/*  # By registered date*/
/*  #*/
/*  # @ListChild (list="profiles.search.dateTypes", weight="100")*/
/*  #}*/
/* */
/* <li class="date-type-r">*/
/*   <input type="radio" name="{{ this.fieldName }}" value="R" id="date_type_r" {% if this.isDateTypeSelected('R') %} checked="checked" {% endif %} />*/
/*   <label for="date_type_r">{{ t('Registered') }}</label>*/
/* </li>*/
/* */
