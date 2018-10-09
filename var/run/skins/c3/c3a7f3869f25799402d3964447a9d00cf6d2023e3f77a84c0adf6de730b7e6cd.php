<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/MarketPrice/price.twig */
class __TwigTemplate_7189afacc96cb1d454a49485217817418d4cf8d3d67f7817bf3164015c069c75 extends \XLite\Core\Templating\Twig\Template
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
<tr>
  <td class=\"name-attribute\">";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Market price")), "html", null, true);
        echo "</td>
  <td class=\"star\">&nbsp;</td>
  <td class=\"value-attribute\">
    <input type=\"text\" name=\"";
        // line 11
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "marketPrice"), "method"), "html", null, true);
        echo "\" size=\"18\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "marketPrice", array()), "html", null, true);
        echo "\" />
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/MarketPrice/price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 11,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # Product element*/
/*  #*/
/*  # @ListChild (list="product.modify.list", weight="550")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td class="name-attribute">{{ t('Market price') }}</td>*/
/*   <td class="star">&nbsp;</td>*/
/*   <td class="value-attribute">*/
/*     <input type="text" name="{{ this.getNamePostedData('marketPrice') }}" size="18" value="{{ this.product.marketPrice }}" />*/
/*   </td>*/
/* </tr>*/
/* */
