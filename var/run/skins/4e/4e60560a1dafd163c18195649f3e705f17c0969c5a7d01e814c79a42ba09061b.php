<?php

/* /var/www/next/output/xcart/src/skins/admin/export/parts/failed.errors.twig */
class __TwigTemplate_e290eac66c71484e0a80552189aa77ab2a558d33d21561fcc6f1eb02a6219da5 extends \XLite\Core\Templating\Twig\Template
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
<div class=\"errors\">
  <ul>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getErrors", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
            // line 10
            echo "      <li>
        <h3>";
            // line 11
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "title", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 12
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($context["error"], "body", array()), "html", null, true);
            echo "</p>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/export/parts/failed.errors.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  35 => 12,  31 => 11,  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Export failed section : errors*/
/*  #*/
/*  # @ListChild (list="export.failed.content", weight="100")*/
/*  #}*/
/* */
/* <div class="errors">*/
/*   <ul>*/
/*     {% for error in this.getErrors() %}*/
/*       <li>*/
/*         <h3>{{ error.title }}</h3>*/
/*         <p>{{ error.body }}</p>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* </div>*/
/* */
