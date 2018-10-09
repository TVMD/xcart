<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_amount.twig */
class __TwigTemplate_50401c0e698809d00b1e824af13a9781e7d34992fb102ba1e4e64e7e024901d1 extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "hasManualPinCodes", array(), "method")) {
            // line 8
            echo "  <tr>
    <td>";
            // line 9
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Quantity in stock")), "html", null, true);
            echo "</td>
    <td>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getRemainingPinCodesCount", array(), "method"), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Quantity in stock is determined by the amount of the remaining PIN codes")), "html", null, true);
            echo ")</td>
  </tr>
";
        }
        // line 13
        echo "
";
        // line 14
        if ( !$this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "hasManualPinCodes", array(), "method")) {
            // line 15
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("product/inventory/inv_track_amount.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("product/inventory/inv_track_amount.twig", "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_amount.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_amount.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 15,  42 => 14,  39 => 13,  31 => 10,  27 => 9,  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Quantity in stock input*/
/*  #*/
/*  # @ListChild (list="product.inventory.parts", weight="20")*/
/*  #}*/
/* */
/* {% if this.product.hasManualPinCodes() %}*/
/*   <tr>*/
/*     <td>{{ t('Quantity in stock') }}</td>*/
/*     <td>{{ this.product.getRemainingPinCodesCount() }} ({{ t('Quantity in stock is determined by the amount of the remaining PIN codes') }})</td>*/
/*   </tr>*/
/* {% endif %}*/
/* */
/* {% if not this.product.hasManualPinCodes() %}*/
/*   {% include 'product/inventory/inv_track_amount.twig' %}*/
/* {% endif %}*/
/* */
