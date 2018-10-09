<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/details.twig */
class __TwigTemplate_1ccf3441747ac38b9bae6e83c97dc83549a56619051df6b6a0ff2e59cf4c6888 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
";
        // line 8
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isVisibleAverageRating", array(), "method")) {
            // line 9
            echo "  <div class=\"ratings-details\">
    <div class=\"title\">
      ";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Rating of votes")), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getVotesCount", array(), "method"), "html", null, true);
            echo ")
    </div>
    <table>
      ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getRatings", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["rating"]) {
                // line 15
                echo "        <tr class=\"rating-";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "rating", array()), "html", null, true);
                echo "\">
          <td class=\"indent\"></td>
          <td class=\"rating-digit\">";
                // line 17
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "rating", array()), "html", null, true);
                echo "</td>
          <td class=\"rating\">";
                // line 18
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "\\XLite\\Module\\XC\\Reviews\\View\\VoteBar", "rate" => "1", "max" => "1", "length" => "1"))), "html", null, true);
                echo "</td>
          <td class=\"percent\">
            <div class=\"rating-line rating-";
                // line 20
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "rating", array()), "html", null, true);
                echo "\" style=\"width:";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "percent", array()), "html", null, true);
                echo "%\">&nbsp;</div>
            ";
                // line 21
                if ($this->getAttribute($context["rating"], "showPercentLastDiv", array())) {
                    echo "<div class=\"rating-end\">&nbsp;</div>";
                }
                // line 22
                echo "          </td>
          <td class=\"count count-";
                // line 23
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "count", array()), "html", null, true);
                echo "\"><span class=\"count-number\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["rating"], "count", array()), "html", null, true);
                echo "</span><span class=\"count-text\">";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("customers")), "html", null, true);
                echo "</span></td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rating'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "      <tr><td colspan=\"5\">&nbsp;</td></tr>
    </table>
  
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/Reviews/average_rating/details.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 26,  68 => 23,  65 => 22,  61 => 21,  55 => 20,  50 => 18,  46 => 17,  40 => 15,  36 => 14,  28 => 11,  24 => 9,  22 => 8,  19 => 7,);
    }
}
/* {##*/
/*  # Rating of reviews*/
/*  #*/
/*  # @ListChild (list="reviews.page.rating", weight="300")*/
/*  # @ListChild (list="reviews.rating.details", weight="200")*/
/*  #}*/
/* */
/* {% if this.isVisibleAverageRating() %}*/
/*   <div class="ratings-details">*/
/*     <div class="title">*/
/*       {{ t('Rating of votes') }} ({{ this.getVotesCount() }})*/
/*     </div>*/
/*     <table>*/
/*       {% for rating in this.getRatings() %}*/
/*         <tr class="rating-{{ rating.rating }}">*/
/*           <td class="indent"></td>*/
/*           <td class="rating-digit">{{ rating.rating }}</td>*/
/*           <td class="rating">{{ widget('\\XLite\\Module\\XC\\Reviews\\View\\VoteBar', rate='1', max='1', length='1') }}</td>*/
/*           <td class="percent">*/
/*             <div class="rating-line rating-{{ rating.rating }}" style="width:{{ rating.percent }}%">&nbsp;</div>*/
/*             {% if rating.showPercentLastDiv %}<div class="rating-end">&nbsp;</div>{% endif %}*/
/*           </td>*/
/*           <td class="count count-{{ rating.count }}"><span class="count-number">{{ rating.count }}</span><span class="count-text">{{ t('customers') }}</span></td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*       <tr><td colspan="5">&nbsp;</td></tr>*/
/*     </table>*/
/*   */
/*   </div>*/
/* {% endif %}*/
/* */
