<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/filter.twig */
class __TwigTemplate_4b94fdcaf34c3ef2758cd2dc98b6a43633fbfe8dae2a146ce8e42f0ffd86c795 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAddonFilters", array(), "method")) {
            // line 7
            echo "  <div class=\"addons-filters\">
  
    <div class=\"addons-selectors\">
  
      <form name=\"addons-filter\" method=\"GET\" action=\"";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context)), "html", null, true);
            echo "\">
        ";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\FormField\\Input\\FormId"))), "html", null, true);
            echo "
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getURLParams", array(), "method"));
            foreach ($context['_seq'] as $context["name"] => $context["value"]) {
                // line 14
                echo "          <input type=\"hidden\" name=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "\" value=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\" />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "
        <div class=\"price-filter-box combine-selector\">
          ";
            // line 18
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ItemsList\\Module\\Filter\\Selector", "name" => "price", "items" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPriceOptionsForSelector", array(), "method"), "caption" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("Free & paid"))))), "html", null, true);
            echo "
        </div>

        <div class=\"tag-filter-box combine-selector\">
          ";
            // line 22
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\ItemsList\\Module\\Filter\\Selector", "name" => "tags", "items" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTagOptionsForSelector", array(), "method"), "caption" => call_user_func_array($this->env->getFunction('t')->getCallable(), array("All tags"))))), "html", null, true);
            echo "
        </div>
  
      </form>
  
    </div>
  
    ";
            // line 29
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "marketplace.addons-filters"))), "html", null, true);
            echo "

  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 29,  61 => 22,  54 => 18,  50 => 16,  39 => 14,  35 => 13,  31 => 12,  27 => 11,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="100")*/
/*  #}*/
/* {% if this.isVisibleAddonFilters() %}*/
/*   <div class="addons-filters">*/
/*   */
/*     <div class="addons-selectors">*/
/*   */
/*       <form name="addons-filter" method="GET" action="{{ url() }}">*/
/*         {{ widget('\\XLite\\View\\FormField\\Input\\FormId') }}*/
/*         {% for name, value in this.getURLParams() %}*/
/*           <input type="hidden" name="{{ name }}" value="{{ value }}" />*/
/*         {% endfor %}*/
/* */
/*         <div class="price-filter-box combine-selector">*/
/*           {{ widget('XLite\\View\\ItemsList\\Module\\Filter\\Selector', name='price', items=this.getPriceOptionsForSelector(), caption=t('Free & paid')) }}*/
/*         </div>*/
/* */
/*         <div class="tag-filter-box combine-selector">*/
/*           {{ widget('XLite\\View\\ItemsList\\Module\\Filter\\Selector', name='tags', items=this.getTagOptionsForSelector(), caption=t('All tags')) }}*/
/*         </div>*/
/*   */
/*       </form>*/
/*   */
/*     </div>*/
/*   */
/*     {{ widget_list('marketplace.addons-filters') }}*/
/* */
/*   </div>*/
/* {% endif %}*/
/* */
