<?php

/* /var/www/next/output/xcart/src/skins/admin/product/inventory/low_limit_selector.twig */
class __TwigTemplate_e360626f00e91f397378e2a2d2213955e2df5d259dd206b70af67aaecf54c529 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Low limit notification for this product is")), "html", null, true);
        echo "</td>
  <td>
    <select name=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "lowLimitEnabled"), "method"), "html", null, true);
        echo "\">
      <option value=\"1\" ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getLowLimitEnabled", array(), "method") == "1")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enabled")), "html", null, true);
        echo "</option>
      <option value=\"0\" ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getLowLimitEnabled", array(), "method") == "0")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Disabled")), "html", null, true);
        echo "</option>
    </select>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/product/inventory/low_limit_selector.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 12,  32 => 11,  28 => 10,  23 => 8,  19 => 6,);
    }
}
/* {##*/
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="product.inventory.parts", weight="30")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td>{{ t('Low limit notification for this product is') }}</td>*/
/*   <td>*/
/*     <select name="{{ this.getNamePostedData('lowLimitEnabled') }}">*/
/*       <option value="1" {% if this.product.getLowLimitEnabled() == '1' %} selected="selected" {% endif %}>{{ t('Enabled') }}</option>*/
/*       <option value="0" {% if this.product.getLowLimitEnabled() == '0' %} selected="selected" {% endif %}>{{ t('Disabled') }}</option>*/
/*     </select>*/
/*   </td>*/
/* </tr>*/
/* */
