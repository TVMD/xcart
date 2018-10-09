<?php

/* modules/XC/ProductComparison/header_settings_link.twig */
class __TwigTemplate_62385e28683fa6c9463402674a225450bb2bd9ac26ac0b8a5f1cfd485f00ead7 extends \XLite\Core\Templating\Twig\Template
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
        // line 4
        echo "
<li class=\"account-link-compare compare-indicator ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIndicatorClasses", array(), "method"), "html", null, true);
        echo "\">
  <a ";
        // line 6
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisabled", array(), "method")) {
            echo "href=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCompareURL", array(), "method"), "html", null, true);
            echo "\"";
        }
        echo " data-target=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCompareURL", array(), "method"), "html", null, true);
        echo "\" title=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getLinkHelpMessage", array(), "method"), "html", null, true);
        echo "\">
\t<span>";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Compare")), "html", null, true);
        echo "</span>
\t<span class=\"counter\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getComparedCount", array(), "method") > 0)) ? ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getComparedCount", array(), "method")) : ("")), "html", null, true);
        echo "</span>
  </a>
</li>
";
    }

    public function getTemplateName()
    {
        return "modules/XC/ProductComparison/header_settings_link.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  38 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Compare link*/
/*  #}*/
/* */
/* <li class="account-link-compare compare-indicator {{ this.getIndicatorClasses() }}">*/
/*   <a {% if not this.isDisabled() %}href="{{ this.getCompareURL() }}"{% endif %} data-target="{{ this.getCompareURL() }}" title="{{ this.getLinkHelpMessage() }}">*/
/* 	<span>{{ t('Compare') }}</span>*/
/* 	<span class="counter">{{ this.getComparedCount() > 0 ? this.getComparedCount() : "" }}</span>*/
/*   </a>*/
/* </li>*/
/* */
