<?php

/* /var/www/next/output/xcart/src/skins/admin/product/inventory/inv_track_selector.twig */
class __TwigTemplate_29d966020f9104e98582ea6f605a135f37698a9e21dbd4f59822a15493551072 extends \XLite\Core\Templating\Twig\Template
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
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Inventory tracking for this product is")), "html", null, true);
        echo "</td>
  <td>
    <select name=\"";
        // line 10
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getNamePostedData", array(0 => "enabled"), "method"), "html", null, true);
        echo "\">
      <option value=\"1\" ";
        // line 11
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getInventoryEnabled", array(), "method") == "1")) {
            echo " selected=\"selected\" ";
        }
        echo ">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enabled")), "html", null, true);
        echo "</option>
      <option value=\"0\" ";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "iproduct", array()), "getInventoryEnabled", array(), "method") == "0")) {
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
        return "/var/www/next/output/xcart/src/skins/admin/product/inventory/inv_track_selector.twig";
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
/*  # @ListChild (list="product.inventory.parts", weight="10")*/
/*  #}*/
/* */
/* <tr>*/
/*   <td>{{ t('Inventory tracking for this product is') }}</td>*/
/*   <td>*/
/*     <select name="{{ this.getNamePostedData('enabled') }}">*/
/*       <option value="1" {% if this.product.getInventoryEnabled() == '1' %} selected="selected" {% endif %}>{{ t('Enabled') }}</option>*/
/*       <option value="0" {% if this.iproduct.getInventoryEnabled() == '0' %} selected="selected" {% endif %}>{{ t('Disabled') }}</option>*/
/*     </select>*/
/*   </td>*/
/* </tr>*/
/* */
