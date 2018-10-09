<?php

/* /var/www/next/output/xcart/src/skins/customer/footer/parts/css_aggrefation.twig */
class __TwigTemplate_d60a0001cb3a4f265ff50368fcbda416ae4bed597e9e689d6d3783f9a9507014 extends \XLite\Core\Templating\Twig\Template
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
        if (($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSAggregation", array(), "method") && $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSOptimization", array(), "method"))) {
            // line 8
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAggregateCSSResources", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 9
                echo "    ";
                if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isResourceSuitableForOptimization", array(0 => $context["file"]), "method")) {
                    // line 10
                    echo "      <link href=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceURL", array(0 => $this->getAttribute($context["file"], "url", array()), 1 => $context["file"]), "method"), "html", null, true);
                    echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "media", array()), "html", null, true);
                    echo "\" />
    ";
                }
                // line 12
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/footer/parts/css_aggrefation.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  32 => 10,  29 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Footer part part*/
/*  #*/
/*  # @ListChild (list="footer", weight="100")*/
/*  #}*/
/* */
/* {% if this.doCSSAggregation() and this.doCSSOptimization() %}*/
/*   {% for file in this.getAggregateCSSResources() %}*/
/*     {% if this.isResourceSuitableForOptimization(file) %}*/
/*       <link href="{{ this.getResourceURL(file.url, file) }}" rel="stylesheet" type="text/css" media="{{ file.media }}" />*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* {% endif %}*/
/* */
