<?php

/* /var/www/next/output/xcart/src/skins/customer/product/search/parts/substring.input.twig */
class __TwigTemplate_ce3223b1ec136205ffcec3acb463b99dfe8bb8cb68b60e3d760fd50f8508a578 extends \XLite\Core\Templating\Twig\Template
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
<td class=\"substring-cell\">
  <input type=\"text\" class=\"form-text form-control\" size=\"30\" maxlength=\"200\" name=\"substring\" value=\"";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCondition", array(0 => "substring"), "method"), "html", null, true);
        echo "\" />
</td>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/product/search/parts/substring.input.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Substring*/
/*  #*/
/*  # @listChild (list="products.search.conditions.substring", weight="100")*/
/*  #}*/
/* */
/* <td class="substring-cell">*/
/*   <input type="text" class="form-text form-control" size="30" maxlength="200" name="substring" value="{{ this.getCondition('substring') }}" />*/
/* </td>*/
/* */
