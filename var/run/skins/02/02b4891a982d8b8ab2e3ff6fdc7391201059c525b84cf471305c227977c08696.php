<?php

/* vote_bar/vote_bar.twig */
class __TwigTemplate_cae1bd52c8ce55bdc9e9dca8a29ff112e565678db1d0c7ffa21878ce7e8d5147 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"vote-bar";
        // line 5
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEditable", array(), "method")) {
            echo " editable";
        }
        echo "\">

  <div class=\"rating-stars\">
    <div class=\"stars-row\">
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStarsCount", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 10
            echo "        <div class=\"star-single\"><span class=\"fa fa-star\"></span></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>

    <div class=\"stars-row full\" style=\"width: ";
        // line 14
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getPercent", array(), "method"), "html", null, true);
        echo "%;\">
      ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStarsCount", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
            // line 16
            echo "        <div class=\"star-single\"><span class=\"fa fa-star\"></span></div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>

    ";
        // line 20
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isEditable", array(), "method")) {
            // line 21
            echo "    <div class=\"stars-row hovered\" style=\"display: none;\">
      ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getStarsCount", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["num"]) {
                // line 23
                echo "        <div class=\"star-single star-num-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["num"], "html", null, true);
                echo "\" data-rating=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $context["num"], "html", null, true);
                echo "\" data-rating-label=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatingLabelFor", array(0 => $context["num"]), "method"), "html", null, true);
                echo "\"><span class=\"fa fa-star\"></span></div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['num'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    </div>

    <input type=\"hidden\" name=\"";
            // line 27
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getFieldName", array(), "method"), "html", null, true);
            echo "\" value=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRating", array(), "method"), "html", null, true);
            echo "\" />
    ";
        }
        // line 29
        echo "  </div>

  ";
        // line 31
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatingLabel", array(), "method")) {
            // line 32
            echo "    <span class=\"rating-label\">";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatingLabel", array(), "method"), "html", null, true);
            echo "</span>
  ";
        }
        // line 34
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "vote_bar/vote_bar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  104 => 32,  102 => 31,  98 => 29,  91 => 27,  87 => 25,  74 => 23,  70 => 22,  67 => 21,  65 => 20,  61 => 18,  54 => 16,  50 => 15,  46 => 14,  42 => 12,  35 => 10,  31 => 9,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Vote bar*/
/*  #}*/
/* */
/* <div class="vote-bar{% if this.isEditable() %} editable{% endif %}">*/
/* */
/*   <div class="rating-stars">*/
/*     <div class="stars-row">*/
/*       {% for num in this.getStarsCount() %}*/
/*         <div class="star-single"><span class="fa fa-star"></span></div>*/
/*       {% endfor %}*/
/*     </div>*/
/* */
/*     <div class="stars-row full" style="width: {{ this.getPercent() }}%;">*/
/*       {% for num in this.getStarsCount() %}*/
/*         <div class="star-single"><span class="fa fa-star"></span></div>*/
/*       {% endfor %}*/
/*     </div>*/
/* */
/*     {% if this.isEditable() %}*/
/*     <div class="stars-row hovered" style="display: none;">*/
/*       {% for num in this.getStarsCount() %}*/
/*         <div class="star-single star-num-{{ num }}" data-rating="{{num}}" data-rating-label="{{ this.getRatingLabelFor(num) }}"><span class="fa fa-star"></span></div>*/
/*       {% endfor %}*/
/*     </div>*/
/* */
/*     <input type="hidden" name="{{ this.getFieldName() }}" value="{{ this.getRating() }}" />*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   {% if this.getRatingLabel() %}*/
/*     <span class="rating-label">{{ this.getRatingLabel() }}</span>*/
/*   {% endif %}*/
/* </div>*/
/* */
