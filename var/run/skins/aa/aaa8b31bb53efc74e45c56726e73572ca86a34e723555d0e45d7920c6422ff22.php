<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_selector.twig */
class __TwigTemplate_6a0921ad7d19db53caf472ded9313a3cc8c06fcc08d371345b561116dff8af5b extends \XLite\Core\Templating\Twig\Template
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
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Inventory tracking for this product is")), "html", null, true);
            echo "</td>
    <td>";
            // line 10
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Enabled")), "html", null, true);
            echo " (";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Can not be disabled for products with manually defined PIN codes")), "html", null, true);
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
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("product/inventory/inv_track_selector.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("product/inventory/inv_track_selector.twig", "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_selector.twig", 15)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/inv_track_selector.twig";
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
/*  # ____file_title____*/
/*  #*/
/*  # @ListChild (list="product.inventory.parts", weight="10")*/
/*  #}*/
/* */
/* {% if this.product.hasManualPinCodes() %}*/
/*   <tr>*/
/*     <td>{{ t('Inventory tracking for this product is') }}</td>*/
/*     <td>{{ t('Enabled') }} ({{ t('Can not be disabled for products with manually defined PIN codes') }})</td>*/
/*   </tr>*/
/* {% endif %}*/
/* */
/* {% if not this.product.hasManualPinCodes() %}*/
/*   {% include 'product/inventory/inv_track_selector.twig' %}*/
/* {% endif %}*/
/* */
