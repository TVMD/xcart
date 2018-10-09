<?php

/* /var/www/next/output/xcart/src/skins/crisp_white/customer/items_list/product/parts/common.sort-options.twig */
class __TwigTemplate_8493bb17866c5de00a095246e42c44ee7115a8652206cde6da26dc9cab7865ec extends \XLite\Core\Templating\Twig\Template
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
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSortBySelectorVisible", array(), "method")) {
            // line 9
            echo "  <div class=\"sort-box\">
    <div>
      <span class=\"sort-by-label\">";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Sort by:")), "html", null, true);
            echo "</span>
      <span class=\"sort-by-value\">";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortByLabel", array(), "method"))), "html", null, true);
            echo " ";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrderLabel", array(), "method"))), "html", null, true);
            echo "</span>
    </div>
    <ul class=\"display-sort sort-crit grid-list\" id=\"";
            // line 14
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortWidgetId", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "true", array())), "method"), "html", null, true);
            echo "\">
    ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "sortByModes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 16
                echo "      ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSingleOrderSortBy", array(0 => $context["key"]), "method")) {
                    // line 17
                    echo "        <li class=\"list-type-grid ";
                    if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSortByModeSelected", array(0 => $context["key"]), "method")) {
                        echo " selected";
                    }
                    echo "\">
          <a data-sort-by=\"";
                    // line 18
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-sort-order=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrderToChange", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "\" href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionURL", array(0 => array("sortBy" => $context["key"], "sortOrder" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrderToChange", array(), "method"))), "method"), "html", null, true);
                    echo "\">
            ";
                    // line 19
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["name"])), "html", null, true);
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrderLabel", array(0 => $context["key"]), "method"))), "html", null, true);
                    echo "<i class=\"sort-arrow ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortArrowClassCSS", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "\"></i>
          </a>
        </li>
      ";
                } else {
                    // line 23
                    echo "        <li class=\"list-type-grid ";
                    if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSortByModeSelected", array(0 => $context["key"], 1 => "asc"), "method")) {
                        echo " selected";
                    }
                    echo "\">
          <a data-sort-by=\"";
                    // line 24
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-sort-order=\"asc\" href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionURL", array(0 => array("sortBy" => $context["key"], "sortOrder" => "asc")), "method"), "html", null, true);
                    echo "\">
            ";
                    // line 25
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["name"])), "html", null, true);
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAscOrderLabel", array(0 => $context["key"]), "method"))), "html", null, true);
                    echo "<i class=\"sort-arrow ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortArrowClassCSS", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "\"></i>
          </a>
        </li>
        <li class=\"list-type-grid ";
                    // line 28
                    if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSortByModeSelected", array(0 => $context["key"], 1 => "desc"), "method")) {
                        echo " selected";
                    }
                    echo "\">
          <a data-sort-by=\"";
                    // line 29
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" data-sort-order=\"desc\" href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionURL", array(0 => array("sortBy" => $context["key"], "sortOrder" => "desc")), "method"), "html", null, true);
                    echo "\">
            ";
                    // line 30
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["name"])), "html", null, true);
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDescOrderLabel", array(0 => $context["key"]), "method"))), "html", null, true);
                    echo "<i class=\"sort-arrow ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortArrowClassCSS", array(0 => $context["key"]), "method"), "html", null, true);
                    echo "\"></i>
          </a>
        </li>
      ";
                }
                // line 34
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/crisp_white/customer/items_list/product/parts/common.sort-options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 35,  119 => 34,  108 => 30,  102 => 29,  96 => 28,  86 => 25,  80 => 24,  73 => 23,  62 => 19,  54 => 18,  47 => 17,  44 => 16,  40 => 15,  36 => 14,  29 => 12,  25 => 11,  21 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Products list sorting control*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.header")*/
/*  # @ListChild (list="itemsList.product.list.customer.header")*/
/*  # @ListChild (list="itemsList.product.table.customer.header")*/
/*  #}*/
/* {% if this.isSortBySelectorVisible() %}*/
/*   <div class="sort-box">*/
/*     <div>*/
/*       <span class="sort-by-label">{{ t('Sort by:') }}</span>*/
/*       <span class="sort-by-value">{{ t(this.getSortByLabel()) }} {{ t(this.getSortOrderLabel()) }}</span>*/
/*     </div>*/
/*     <ul class="display-sort sort-crit grid-list" id="{{ this.getSortWidgetId(this.true) }}">*/
/*     {% for key, name in this.sortByModes %}*/
/*       {% if this.isSingleOrderSortBy(key) %}*/
/*         <li class="list-type-grid {% if this.isSortByModeSelected(key) %} selected{% endif %}">*/
/*           <a data-sort-by="{{ key }}" data-sort-order="{{ this.getSortOrderToChange(key) }}" href="{{ this.getActionURL({'sortBy': key, 'sortOrder': this.getSortOrderToChange()}) }}">*/
/*             {{ t(name) }} {{ t(this.getSortOrderLabel(key)) }}<i class="sort-arrow {{ this.getSortArrowClassCSS(key) }}"></i>*/
/*           </a>*/
/*         </li>*/
/*       {% else %}*/
/*         <li class="list-type-grid {% if this.isSortByModeSelected(key, 'asc') %} selected{% endif %}">*/
/*           <a data-sort-by="{{ key }}" data-sort-order="asc" href="{{ this.getActionURL({'sortBy': key, 'sortOrder': 'asc'}) }}">*/
/*             {{ t(name) }} {{ t(this.getAscOrderLabel(key)) }}<i class="sort-arrow {{ this.getSortArrowClassCSS(key) }}"></i>*/
/*           </a>*/
/*         </li>*/
/*         <li class="list-type-grid {% if this.isSortByModeSelected(key, 'desc') %} selected{% endif %}">*/
/*           <a data-sort-by="{{ key }}" data-sort-order="desc" href="{{ this.getActionURL({'sortBy': key, 'sortOrder': 'desc'}) }}">*/
/*             {{ t(name) }} {{ t(this.getDescOrderLabel(key)) }}<i class="sort-arrow {{ this.getSortArrowClassCSS(key) }}"></i>*/
/*           </a>*/
/*         </li>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
