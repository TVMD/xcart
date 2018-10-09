<?php

/* /var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/sorting.twig */
class __TwigTemplate_77794892f77645ccd31e4172696520bda5838f8a92523b6bf7dc7a8436b03f47 extends \XLite\Core\Templating\Twig\Template
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
        if (( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLandingPage", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAddonFilters", array(), "method"))) {
            // line 7
            echo "  <div class=\"addons-sort\">
    <ul class=\"addons-sort-box text-selector\">
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOptionsForSelector", array(), "method"));
            foreach ($context['_seq'] as $context["url"] => $context["name"]) {
                // line 10
                echo "      <li class=\"sort";
                if (($context["url"] == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSortOptionsValueForSelector", array(), "method"))) {
                    echo " selected";
                }
                echo "\"><a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["url"], "html", null, true);
                echo "\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['url'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    </ul>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/items_list/module/install/parts/sections/sorting.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  29 => 10,  25 => 9,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="marketplace.top-controls", weight="300")*/
/*  #}*/
/* {% if not this.isLandingPage() and this.isVisibleAddonFilters() %}*/
/*   <div class="addons-sort">*/
/*     <ul class="addons-sort-box text-selector">*/
/*       {% for url, name in this.getSortOptionsForSelector() %}*/
/*       <li class="sort{% if url == this.getSortOptionsValueForSelector() %} selected{% endif %}"><a href="{{ url }}">{{ name }}</a></li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*   </div>*/
/* {% endif %}*/
/* */
