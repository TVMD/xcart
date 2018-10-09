<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.sort-options.twig */
class __TwigTemplate_e8fcdf5ebc0bd151e859cd0b0ef2353ef56db058eefcbb0f3285becb5ed5d822 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 9
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSortBySelectorVisible", array(), "method")) {
            // line 10
            echo "  <div class=\"sort-box\">
  
    <ul class=\"display-sort sort-crit grid-list\" id=\"";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortWidgetId", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "true", array())), "method"), "html", null, true);
            echo "\">
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "sortByModes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 14
                echo "    <li class=\"list-type-grid ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSortByModeSelected", array(0 => $context["key"]), "method")) {
                    echo " selected";
                }
                echo "\">
      <a data-sort-by=\"";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" data-sort-order=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrderToChange", array(0 => $context["key"]), "method"), "html", null, true);
                echo "\" href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionURL", array(0 => array("sortBy" => $context["key"], "sortOrder" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOrderToChange", array(0 => $context["key"]), "method"))), "method"), "html", null, true);
                echo "\">
        ";
                // line 16
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["name"])), "html", null, true);
                echo "<i class=\"sort-arrow ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortArrowClassCSS", array(0 => $context["key"]), "method"), "html", null, true);
                echo "\"></i>
      </a>
    </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </ul>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.sort-options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  51 => 16,  43 => 15,  36 => 14,  32 => 13,  28 => 12,  24 => 10,  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Products list sorting control*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.header")*/
/*  # @ListChild (list="itemsList.product.list.customer.header")*/
/*  # @ListChild (list="itemsList.product.table.customer.header")*/
/*  #}*/
/* */
/* {% if this.isSortBySelectorVisible() %}*/
/*   <div class="sort-box">*/
/*   */
/*     <ul class="display-sort sort-crit grid-list" id="{{ this.getSortWidgetId(this.true) }}">*/
/*     {% for key, name in this.sortByModes %}*/
/*     <li class="list-type-grid {% if this.isSortByModeSelected(key) %} selected{% endif %}">*/
/*       <a data-sort-by="{{ key }}" data-sort-order="{{ this.getSortOrderToChange(key) }}" href="{{ this.getActionURL({'sortBy': key, 'sortOrder': this.getSortOrderToChange(key)}) }}">*/
/*         {{ t(name) }}<i class="sort-arrow {{ this.getSortArrowClassCSS(key) }}"></i>*/
/*       </a>*/
/*     </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
