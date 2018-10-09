<?php

/* /var/www/next/output/xcart/src/skins/customer/header/parts/parts.css/css.twig */
class __TwigTemplate_a1553d2f6cb3e580b77f68e71cc696791b86ae36714480dd5772f36b7a5ec72a extends \XLite\Core\Templating\Twig\Template
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
        if ( !$this->getAttribute((isset($context["this"]) ? $context["this"] : null), "doCSSAggregation", array(), "method")) {
            // line 7
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCSSResources", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
                // line 8
                echo "    ";
                echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array("template" => "header/parts/parts.css/css_resource.twig", "async" => $this->getAttribute(                // line 9
$context["file"], "async", array()), "media" => $this->getAttribute(                // line 10
$context["file"], "media", array()), "url" => $this->getAttribute(                // line 11
(isset($context["this"]) ? $context["this"] : null), "getResourceURL", array(0 => $this->getAttribute($context["file"], "url", array()), 1 => $context["file"]), "method")))), "html", null, true);
                // line 12
                echo "
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/header/parts/parts.css/css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 12,  30 => 11,  29 => 10,  28 => 9,  26 => 8,  21 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Header part*/
/*  #*/
/*  # @ListChild (list="head.css", weight="100")*/
/*  #}*/
/* {% if not this.doCSSAggregation() %}*/
/*   {% for file in this.getCSSResources() %}*/
/*     {{ widget(template='header/parts/parts.css/css_resource.twig',*/
/*       async=file.async,*/
/*       media=file.media,*/
/*       url=this.getResourceURL(file.url, file)*/
/*     ) }}*/
/*   {% endfor %}*/
/* {% endif %}*/
/* */
