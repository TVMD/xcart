<?php

/* /var/www/next/output/xcart/src/skins/customer/jscontainer/parts/js.twig */
class __TwigTemplate_5fe4fa8b0c058bea18830f164711b3578d61d417453904624478f9a20c321c76 extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doJSAggregation", array(), "method")) {
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getJSResources", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "  <script src=\"";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getResourceURL", array(0 => $this->getAttribute($context["file"], "url", array()), 1 => $context["file"]), "method"), "html", null, true);
                echo "\"
          ";
                // line 9
                if ($this->getAttribute($context["file"], "async", array())) {
                    echo " async";
                }
                // line 10
                echo "          ";
                if ($this->getAttribute($context["file"], "defer", array())) {
                    echo " defer";
                }
                // line 11
                echo "          ";
                if ($this->getAttribute($context["file"], "code", array())) {
                    echo " ";
                    echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["file"], "code", array()), "html", null, true);
                }
                echo "></script>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/jscontainer/parts/js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 11,  34 => 10,  30 => 9,  25 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Not cached JS part*/
/*  #*/
/*  # @ListChild (list="jscontainer.js", weight="100")*/
/*  #}*/
/* {% if not this.doJSAggregation() %}*/
/* {% for file in this.getJSResources() %}*/
/*   <script src="{{ this.getResourceURL(file.url, file) }}"*/
/*           {% if file.async %} async{% endif %}*/
/*           {% if file.defer %} defer{% endif %}*/
/*           {% if file.code %} {{ file.code }}{% endif %}></script>*/
/* {% endfor %}*/
/* {% endif %}*/
/* */
