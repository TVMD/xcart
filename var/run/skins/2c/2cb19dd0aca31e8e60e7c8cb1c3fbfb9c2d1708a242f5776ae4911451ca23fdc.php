<?php

/* modules/CDev/SimpleCMS/footer_menu.twig */
class __TwigTemplate_03d14c8faecc99a2b7db2146a48d455286914640c3b1e991f47c40b2ce9d5df5 extends \XLite\Core\Templating\Twig\Template
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
<div id=\"secondary-menu\" class=\"clearfix\">
 <ul class=\"footer-menu\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getItems", array(), "method"));
        foreach ($context['_seq'] as $context["i"] => $context["item"]) {
            // line 8
            echo "      ";
            if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isLevelUp", array(0 => $this->getAttribute($context["item"], "depth", array())), "method")) {
                // line 9
                echo "        <ul>
      ";
            } else {
                // line 11
                echo "        ";
                if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isFirstElement", array(), "method")) {
                    // line 12
                    echo "        </li>
        ";
                }
                // line 14
                echo "      ";
            }
            // line 15
            echo "
      ";
            // line 16
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "closeMenuList", array(0 => $this->getAttribute($context["item"], "depth", array())), "method");
            echo "
      <li ";
            // line 17
            echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayItemClass", array(0 => $context["i"], 1 => $context["item"]), "method");
            echo ">
        ";
            // line 18
            if ($this->getAttribute($context["item"], "url", array())) {
                // line 19
                echo "        <a href=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true);
                echo "\" ";
                if ($this->getAttribute($context["item"], "active", array())) {
                    echo "class=\"active\"";
                }
                echo ">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</a>
        ";
            } else {
                // line 21
                echo "        <span class=\"footer-title\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["item"], "label", array()), "html", null, true);
                echo "</span>
        ";
            }
            // line 23
            echo "          
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </li>
    ";
        // line 26
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "closeMenuList", array(), "method");
        echo "
 </ul>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/CDev/SimpleCMS/footer_menu.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  83 => 25,  76 => 23,  70 => 21,  58 => 19,  56 => 18,  52 => 17,  48 => 16,  45 => 15,  42 => 14,  38 => 12,  35 => 11,  31 => 9,  28 => 8,  24 => 7,  19 => 4,);
    }
}
/* {##*/
/*  # Top menu*/
/*  #}*/
/* */
/* <div id="secondary-menu" class="clearfix">*/
/*  <ul class="footer-menu">*/
/*     {% for i, item in this.getItems() %}*/
/*       {% if this.isLevelUp(item.depth) %}*/
/*         <ul>*/
/*       {% else %}*/
/*         {% if not this.isFirstElement() %}*/
/*         </li>*/
/*         {% endif %}*/
/*       {% endif %}*/
/* */
/*       {{ this.closeMenuList(item.depth)|raw }}*/
/*       <li {{ this.displayItemClass(i, item)|raw }}>*/
/*         {% if item.url %}*/
/*         <a href="{{ item.url }}" {% if item.active %}class="active"{% endif %}>{{ item.label }}</a>*/
/*         {% else %}*/
/*         <span class="footer-title">{{ item.label }}</span>*/
/*         {% endif %}*/
/*           */
/*     {% endfor %}*/
/*       </li>*/
/*     {{ this.closeMenuList()|raw }}*/
/*  </ul>*/
/* </div>*/
