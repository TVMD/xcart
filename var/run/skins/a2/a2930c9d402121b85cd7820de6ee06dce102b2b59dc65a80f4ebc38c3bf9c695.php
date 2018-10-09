<?php

/* form_field/input.twig */
class __TwigTemplate_8dd4528abfe19fbb310723a3571b5f521f1524b0154b835f6f591a868794be77 extends \XLite\Core\Templating\Twig\Template
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
<span class=\"input-field-wrapper ";
        // line 5
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getWrapperClass", array(), "method"), "html", null, true);
        echo "\">
  ";
        // line 6
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "displayCommentedData", array(0 => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCommentedData", array(), "method")), "method"), "html", null, true);
        echo "
  <input";
        // line 7
        echo $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAttributesCode", array(), "method");
        echo " />
</span>
";
    }

    public function getTemplateName()
    {
        return "form_field/input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  22 => 5,  19 => 4,);
    }
}
/* {##*/
/*  # Common input template*/
/*  #}*/
/* */
/* <span class="input-field-wrapper {{ this.getWrapperClass() }}">*/
/*   {{ this.displayCommentedData(this.getCommentedData()) }}*/
/*   <input{{ this.getAttributesCode()|raw }} />*/
/* </span>*/
/* */
