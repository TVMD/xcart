<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/billing/address.create.twig */
class __TwigTemplate_ea6bce10f1e83bccc35833b906af1af7c1b2679134118362d299a7324c1da6dd extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isCreateVisible", array(), "method")) {
            // line 8
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig", "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/billing/address.create.twig", 8)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/blocks/address_form/billing/address.create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 8,  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Shipping address : create profile checkbox*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.blocks.address.billing.email", weight="100")*/
/*  #}*/
/* */
/* {% if this.isCreateVisible() %}*/
/*   {% include 'modules/XC/FastLaneCheckout/blocks/address_form/address.create.twig' %}*/
/* {% endif %}*/
/* */
