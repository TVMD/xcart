<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/QSL/CloudSearch/cloud_filters/items_list/product/parts/common.filters.twig */
class __TwigTemplate_07774d6fc0e932517b23add3838e0f9f52179af02f06a5a5ec00902a1fd5af67 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCloudFiltersMobileLinkVisible", array(), "method")) {
            // line 8
            echo "    <div id=\"cloud-filters-mobile-link\" class=\"hidden\">
        <a href=\"#cf-slide-menu\">
            ";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Filter")), "html", null, true);
            echo "
            ";
            // line 11
            if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cloudFiltersCount", array()) > 0)) {
                echo " (";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "cloudFiltersCount", array()), "html", null, true);
                echo ")";
            }
            // line 12
            echo "            »
        </a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/QSL/CloudSearch/cloud_filters/items_list/product/parts/common.filters.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  32 => 11,  28 => 10,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # @ListChild (list="itemsList.product.grid.customer.header", weight="100")*/
/*  # @ListChild (list="itemsList.product.list.customer.header", weight="100")*/
/*  # @ListChild (list="itemsList.product.table.customer.header", weight="100")*/
/*  #}*/
/* */
/* {% if this.isCloudFiltersMobileLinkVisible() %}*/
/*     <div id="cloud-filters-mobile-link" class="hidden">*/
/*         <a href="#cf-slide-menu">*/
/*             {{ t('Filter') }}*/
/*             {% if this.cloudFiltersCount > 0 %} ({{ this.cloudFiltersCount }}){% endif %}*/
/*             »*/
/*         </a>*/
/*     </div>*/
/* {% endif %}*/
