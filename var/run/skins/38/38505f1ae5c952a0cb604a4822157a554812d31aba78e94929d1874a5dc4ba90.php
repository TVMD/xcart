<?php

/* /var/www/next/output/xcart/src/skins/admin/pager/parts/items_total.twig */
class __TwigTemplate_54414f283fe2abcf4da27b350b15f22f7de1818c8d2ca2396390751f301c3a4a extends \XLite\Core\Templating\Twig\Template
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
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isItemsPerPageVisible", array(), "method")) {
            // line 8
            echo "  <div class=\"pager-items-total\">
    ";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Items")), "html", null, true);
            echo ":
    <span class=\"begin-record-number\">";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getBeginRecordNumber", array(), "method"), "html", null, true);
            echo "</span>
    &ndash;
    <span class=\"end-record-number\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getEndRecordNumber", array(), "method"), "html", null, true);
            echo "</span> ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("of")), "html", null, true);
            echo " <span class=\"records-count\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsTotal", array(), "method"), "html", null, true);
            echo "</span>";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isItemsPerPageSelectorVisible", array(), "method")) {
                echo "<span>, <input type=\"text\" value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsPerPage", array(), "method"), "html", null, true);
                echo "\" class=\"page-length\" /> ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("per page")), "html", null, true);
                echo " </span>";
            }
            // line 13
            echo "  </div>
";
        }
        // line 15
        echo "
<div class=\"clear\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/pager/parts/items_total.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 15,  50 => 13,  36 => 12,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Products list items total*/
/*  #*/
/*  # @ListChild (list="pager.itemsTotal", weight="20")*/
/*  #}*/
/* */
/* {% if this.isItemsPerPageVisible() %}*/
/*   <div class="pager-items-total">*/
/*     {{ t('Items') }}:*/
/*     <span class="begin-record-number">{{ this.getBeginRecordNumber() }}</span>*/
/*     &ndash;*/
/*     <span class="end-record-number">{{ this.getEndRecordNumber() }}</span> {{ t('of') }} <span class="records-count">{{ this.getItemsTotal() }}</span>{% if this.isItemsPerPageSelectorVisible() %}<span>, <input type="text" value="{{ this.getItemsPerPage() }}" class="page-length" /> {{ t('per page') }} </span>{% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
/* <div class="clear"></div>*/
/* */
