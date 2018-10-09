<?php

/* /var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.display-modes.twig */
class __TwigTemplate_effbce9d8e616b2462d3a785f4213ad67afe4bd151c3f218310c7b5fe6546bba extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isDisplayModeSelectorVisible", array(), "method")) {
            // line 10
            echo "  <ul class=\"display-modes grid-list ";
            echo ((($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getParam", array(0 => "displayMode"), "method") != "table")) ? ("mobile-hidden") : (""));
            echo "\">
    ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayModes", array()));
            foreach ($context['_seq'] as $context["key"] => $context["name"]) {
                // line 12
                echo "      <li class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDisplayModeLinkClassName", array(0 => $context["key"]), "method"), "html", null, true);
                echo "\">
        <a href=\"";
                // line 13
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getActionURL", array(0 => array("displayMode" => $context["key"])), "method"), "html", null, true);
                echo "\" class=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" title=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["name"])), "html", null, true);
                echo "\">
          <i class=\"fa ";
                // line 14
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getDisplayModeCSS", array(0 => $context["key"]), "method"), "html", null, true);
                echo "\"></i>
          <span class=\"text\">";
                // line 15
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array($context["name"])), "html", null, true);
                echo "</span>
        </a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/items_list/product/parts/common.display-modes.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  50 => 15,  46 => 14,  38 => 13,  33 => 12,  29 => 11,  24 => 10,  22 => 9,  19 => 8,);
    }
}
/* {##*/
/*  # Products list display mode selector*/
/*  #*/
/*  # @ListChild (list="itemsList.product.grid.customer.header", weight="20")*/
/*  # @ListChild (list="itemsList.product.list.customer.header", weight="20")*/
/*  # @ListChild (list="itemsList.product.table.customer.header", weight="20")*/
/*  #}*/
/* */
/* {% if this.isDisplayModeSelectorVisible() %}*/
/*   <ul class="display-modes grid-list {{ this.getParam('displayMode') != 'table' ? 'mobile-hidden' : '' }}">*/
/*     {% for key, name in this.displayModes %}*/
/*       <li class="{{ this.getDisplayModeLinkClassName(key) }}">*/
/*         <a href="{{ this.getActionURL({'displayMode': key}) }}" class="{{ key }}" title="{{ t(name) }}">*/
/*           <i class="fa {{ this.getDisplayModeCSS(key) }}"></i>*/
/*           <span class="text">{{ t(name) }}</span>*/
/*         </a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
