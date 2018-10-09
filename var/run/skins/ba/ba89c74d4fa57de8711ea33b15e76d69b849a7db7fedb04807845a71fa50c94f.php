<?php

/* modules/QSL/CloudSearch/cloud_filters/slidebar.twig */
class __TwigTemplate_9e339454fe9a4ecd7085519bb3089d59ea3287112859152abfcf403449d07d85 extends \XLite\Core\Templating\Twig\Template
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
<nav id=\"cf-slide-menu\" class=\"hidden\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "shouldRender", array(), "method")) {
            // line 7
            echo "        <div id=\"cloud-filters-mobile\" class=\"cloud-filters\" v-cloak>
            <h4 class=\"title\">";
            // line 8
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Filters")), "html", null, true);
            echo "</h4>

            ";
            // line 10
            echo call_user_func_array($this->env->getFunction('include')->getCallable(), array($this->env, $context, "modules/QSL/CloudSearch/cloud_filters/sidebar_box/body.twig"));
            echo "
        </div>
    ";
        }
        // line 13
        echo "</nav>";
    }

    public function getTemplateName()
    {
        return "modules/QSL/CloudSearch/cloud_filters/slidebar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  33 => 10,  28 => 8,  25 => 7,  23 => 6,  19 => 4,);
    }
}
/* {##*/
/*  # CloudFilters mobile slidebar*/
/*  #}*/
/* */
/* <nav id="cf-slide-menu" class="hidden">*/
/*     {% if this.shouldRender() %}*/
/*         <div id="cloud-filters-mobile" class="cloud-filters" v-cloak>*/
/*             <h4 class="title">{{ t('Filters') }}</h4>*/
/* */
/*             {{ include('modules/QSL/CloudSearch/cloud_filters/sidebar_box/body.twig') }}*/
/*         </div>*/
/*     {% endif %}*/
/* </nav>*/
