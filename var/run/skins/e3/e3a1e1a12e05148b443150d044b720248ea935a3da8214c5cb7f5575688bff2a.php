<?php

/* subcategories/icons/body.twig */
class __TwigTemplate_10257d0ab118791bec46d07db8c80547018e5bbb8a85865ccbd6b534389d1f77 extends \XLite\Core\Templating\Twig\Template
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
";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubcategories", array(), "method")) {
            // line 6
            echo "  <ul class=\"subcategory-view-icons subcategory-list grid-list clearfix\">
    ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getSubcategories", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["subcategory"]) {
                // line 8
                echo "    ";
                if ($this->getAttribute($context["subcategory"], "hasAvailableMembership", array(), "method")) {
                    // line 9
                    echo "      <li>
        <a href=\"";
                    // line 10
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "category", "", array("category_id" => $this->getAttribute($context["subcategory"], "category_id", array())))), "html", null, true);
                    echo "\">
          <span class=\"subcategory-icon lazy-load\">
            ";
                    // line 12
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\View\\Image", "isBlurApplicable" => true, "image" => $this->getAttribute($context["subcategory"], "image", array()), "maxWidth" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconWidth", array(), "method"), "maxHeight" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getIconHeight", array(), "method"), "centerImage" => "1", "alt" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAlt", array(0 => $this->getAttribute($context["subcategory"], "image", array())), "method")))), "html", null, true);
                    echo "
          </span>
          <span class=\"subcategory-name\">";
                    // line 14
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["subcategory"], "name", array()), "html", null, true);
                    echo "</span>
        </a>
      </li>
    ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subcategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNestedViewList", array(0 => "children"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "      <li>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "display", array(), "method"), "html", null, true);
                echo "</li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "  </ul>
";
        }
        // line 24
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "subcategories.base"))), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "subcategories/icons/body.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 24,  74 => 22,  65 => 20,  60 => 19,  54 => 18,  47 => 14,  42 => 12,  37 => 10,  34 => 9,  31 => 8,  27 => 7,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Subcategories list (grid style)*/
/*  #}*/
/* */
/* {% if this.getSubcategories() %}*/
/*   <ul class="subcategory-view-icons subcategory-list grid-list clearfix">*/
/*     {% for subcategory in this.getSubcategories() %}*/
/*     {% if subcategory.hasAvailableMembership() %}*/
/*       <li>*/
/*         <a href="{{ url('category', '', {'category_id': subcategory.category_id}) }}">*/
/*           <span class="subcategory-icon lazy-load">*/
/*             {{ widget('\\XLite\\View\\Image', isBlurApplicable=true, image=subcategory.image, maxWidth=this.getIconWidth(), maxHeight=this.getIconHeight(), centerImage='1', alt=this.getAlt(subcategory.image)) }}*/
/*           </span>*/
/*           <span class="subcategory-name">{{ subcategory.name }}</span>*/
/*         </a>*/
/*       </li>*/
/*     {% endif %}*/
/*     {% endfor %}*/
/*     {% for item in this.getNestedViewList('children') %}*/
/*       <li>{{ item.display() }}</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* {{ widget_list('subcategories.base') }}*/
/* */
