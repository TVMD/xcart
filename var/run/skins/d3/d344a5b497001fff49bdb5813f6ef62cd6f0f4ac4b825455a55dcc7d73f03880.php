<?php

/* /var/www/next/output/xcart/src/skins/admin/top_sellers/parts/period_selector.twig */
class __TwigTemplate_a871c2a1873eb8a2de852e54dcb2d4cbcc4df523ad1deca90969e615b73c3ab6 extends \XLite\Core\Templating\Twig\Template
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
<table class=\"top-sellers-selectors period-selectors\">
  <tr>
    <td class=\"title\">";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("For the period")), "html", null, true);
        echo ":</td>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStatsColumns", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 11
            echo "      <td>
        <a href=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIntervalLink", array(0 => $context["c"]), "method"), "html", null, true);
            echo "\" data-interval=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["c"], "html", null, true);
            echo "\" class=\"";
            if (($context["c"] == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTimeInterval", array(), "method"))) {
                echo " selected";
            }
            echo "\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getColumnTitle", array(0 => $context["c"]), "method"))), "html", null, true);
            echo "</a>
      </td>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </tr>
</table>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/top_sellers/parts/period_selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 15,  35 => 12,  32 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Top sellers period selectors*/
/* */
/*  # @ListChild (list="top_sellers.selectors", weight="20")*/
/*  #}*/
/* */
/* <table class="top-sellers-selectors period-selectors">*/
/*   <tr>*/
/*     <td class="title">{{ t('For the period') }}:</td>*/
/*     {% for c in this.getStatsColumns() %}*/
/*       <td>*/
/*         <a href="{{ this.getIntervalLink(c) }}" data-interval="{{ c }}" class="{% if c == this.getTimeInterval() %} selected{% endif %}">{{ t(this.getColumnTitle(c)) }}</a>*/
/*       </td>*/
/*     {% endfor %}*/
/*   </tr>*/
/* </table>*/
