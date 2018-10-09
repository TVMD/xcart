<?php

/* /var/www/next/output/xcart/src/skins/admin/states/header.twig */
class __TwigTemplate_1052033ee30ccef0bc1f2f07d64774f2a51425da0a798dcf056eeafe731f9166 extends \XLite\Core\Templating\Twig\Template
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
        echo "
";
        // line 7
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountriesWithStates", array(), "method")) {
            // line 8
            echo "  <ul class=\"states-list\">
    ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountriesWithStates", array(), "method"));
            foreach ($context['_seq'] as $context["id"] => $context["country"]) {
                // line 10
                echo "      <li>
        ";
                // line 11
                if (($this->getAttribute($context["country"], "code", array()) != $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountryCode", array(), "method"))) {
                    // line 12
                    echo "          <a href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "states", "", array("country_code" => $this->getAttribute($context["country"], "getCode", array(), "method")))), "html", null, true);
                    echo "\">";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["country"], "getCountry", array(), "method"), "html", null, true);
                    echo "</a>
        ";
                }
                // line 14
                echo "        ";
                if (($this->getAttribute($context["country"], "code", array()) == $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCountryCode", array(), "method"))) {
                    // line 15
                    echo "          <span>";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["country"], "getCountry", array(), "method"), "html", null, true);
                    echo "</span>
        ";
                }
                // line 17
                echo "      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['id'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/states/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 19,  53 => 17,  47 => 15,  44 => 14,  36 => 12,  34 => 11,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Stats management page main template*/
/*  #*/
/*  # @ListChild (list="itemsList.state.header", weight="10")*/
/*  #}*/
/* */
/* {% if this.getCountriesWithStates() %}*/
/*   <ul class="states-list">*/
/*     {% for id, country in this.getCountriesWithStates() %}*/
/*       <li>*/
/*         {% if country.code != this.getCountryCode() %}*/
/*           <a href="{{ url('states', '', {'country_code': country.getCode()}) }}">{{ country.getCountry() }}</a>*/
/*         {% endif %}*/
/*         {% if country.code == this.getCountryCode() %}*/
/*           <span>{{ country.getCountry() }}</span>*/
/*         {% endif %}*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
