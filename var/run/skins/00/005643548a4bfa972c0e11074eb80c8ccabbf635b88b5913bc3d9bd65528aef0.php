<?php

/* /var/www/next/output/xcart/src/skins/admin/product/inventory/low_limit_amount.twig */
class __TwigTemplate_7ef86419d0928e1728d33caf095e915c63f166d8ca413034fe22211428d076eb extends \XLite\Core\Templating\Twig\Template
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
  <td>";
        // line 8
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Low limit quantity")), "html", null, true);
        echo "</td>
  <td>
    <input type=\"text\" name=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "lowLimitAmount"), "method"), "html", null, true);
        echo "\" size=\"18\" value=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getLowLimitAmount", array(), "method"), "html", null, true);
        echo "\" />
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/product/inventory/low_limit_amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="product.inventory.parts", weight="40")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td>{{ t('Low limit quantity') }}</td>*/
/*   <td>*/
/*     <input type="text" name="{{ this.getNamePostedData('lowLimitAmount') }}" size="18" value="{{ this.product.getLowLimitAmount() }}" />*/
/*   </td>*/
/* </tr>*/
/* */
