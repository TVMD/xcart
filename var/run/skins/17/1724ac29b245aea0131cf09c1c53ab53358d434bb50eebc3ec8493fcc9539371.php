<?php

/* /var/www/next/output/xcart/src/skins/admin/pager/model/table/parts/items_per_page.twig */
class __TwigTemplate_35ea78e3dacc9004cd77aee0013931893fb9a01124a914e28e8ec895568a3328 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isItemsPerPageVisible", array(), "method")) {
            // line 7
            echo "  <div class=\"items-per-page-wrapper\">
    <div class=\"search-total-items\">
      ";
            // line 9
            echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("<span>X</span> items", array("X" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsTotal", array(), "method"))));
            echo "
    </div>
    <select name=\"itemsPerPage\" class=\"page-length not-significant\">
      ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItemsPerPageRanges", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["range"]) {
                // line 13
                echo "        <option value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["range"], "html", null, true);
                echo "\" ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isRangeSelected", array(0 => $context["range"]), "method")) {
                    echo " selected=\"selected\" ";
                }
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["range"], "html", null, true);
                echo "</option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['range'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    </select>
    <span>";
            // line 16
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("per page")), "html", null, true);
            echo "</span>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/pager/model/table/parts/items_per_page.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 16,  50 => 15,  35 => 13,  31 => 12,  25 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Items per page*/
/*  #*/
/*  # @ListChild (list="pager.admin.model.table.left", weight="400")*/
/*  #}*/
/* {% if this.isItemsPerPageVisible() %}*/
/*   <div class="items-per-page-wrapper">*/
/*     <div class="search-total-items">*/
/*       {{ t('<span>X</span> items', {'X': this.getItemsTotal()})|raw }}*/
/*     </div>*/
/*     <select name="itemsPerPage" class="page-length not-significant">*/
/*       {% for range in this.getItemsPerPageRanges() %}*/
/*         <option value="{{ range }}" {% if this.isRangeSelected(range) %} selected="selected" {% endif %}>{{ range }}</option>*/
/*       {% endfor %}*/
/*     </select>*/
/*     <span>{{ t('per page') }}</span>*/
/*   </div>*/
/* {% endif %}*/
/* */
