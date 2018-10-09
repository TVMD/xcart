<?php

/* modules/CDev/SimpleCMS/primary_menu_items.twig */
class __TwigTemplate_a2bfd1b4c21ebb2425979b01c4581c0b507f2700cba59eaf92fc23809848316e extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSlidebar", array(), "method")) {
            // line 6
            echo "<ul class=\"nav navbar-nav top-main-menu\">
";
        }
        // line 8
        echo "  ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "header.flycategories"))), "html", null, true);
        echo "
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 10
            echo "    ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLevelUp", array(0 => $this->getAttribute($context["item"], "depth", array())), "method")) {
                // line 11
                echo "  <ul>
    ";
            } else {
                // line 13
                echo "      ";
                if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFirstElement", array(), "method")) {
                    // line 14
                    echo "    </li>
      ";
                }
                // line 16
                echo "    ";
            }
            // line 17
            echo "
    ";
            // line 18
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "closeMenuList", array(0 => $this->getAttribute($context["item"], "depth", array())), "method");
            echo "
    <li ";
            // line 19
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayItemClass", array(0 => $context["i"], 1 => $context["item"]), "method");
            echo ">
    ";
            // line 20
            if ($this->getAttribute($context["item"], "url", array())) {
                // line 21
                echo "      <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["item"], "active", array())) {
                    echo "class=\"active\"";
                }
                echo "><span>";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</span></a>
    ";
            } else {
                // line 23
                echo "      <span class=\"primary-title\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</span>
    ";
            }
            // line 25
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </li>
  ";
        // line 27
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "closeMenuList", array(), "method");
        echo "
";
        // line 28
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isSlidebar", array(), "method")) {
            // line 29
            echo "</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/CDev/SimpleCMS/primary_menu_items.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  98 => 28,  94 => 27,  91 => 26,  85 => 25,  79 => 23,  67 => 21,  65 => 20,  61 => 19,  57 => 18,  54 => 17,  51 => 16,  47 => 14,  44 => 13,  40 => 11,  37 => 10,  33 => 9,  28 => 8,  24 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Top menu*/
/*  #}*/
/* */
/* {% if not this.isSlidebar() %}*/
/* <ul class="nav navbar-nav top-main-menu">*/
/* {% endif %}*/
/*   {{ widget_list('header.flycategories') }}*/
/*   {% for i, item in this.getItems() %}*/
/*     {% if this.isLevelUp(item.depth) %}*/
/*   <ul>*/
/*     {% else %}*/
/*       {% if not this.isFirstElement() %}*/
/*     </li>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*     {{ this.closeMenuList(item.depth)|raw }}*/
/*     <li {{ this.displayItemClass(i, item)|raw }}>*/
/*     {% if item.url %}*/
/*       <a href="{{ item.url }}" {% if item.active %}class="active"{% endif %}><span>{{ item.label }}</span></a>*/
/*     {% else %}*/
/*       <span class="primary-title">{{ item.label }}</span>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/*     </li>*/
/*   {{ this.closeMenuList()|raw }}*/
/* {% if not this.isSlidebar() %}*/
/* </ul>*/
/* {% endif %}*/
/* */
