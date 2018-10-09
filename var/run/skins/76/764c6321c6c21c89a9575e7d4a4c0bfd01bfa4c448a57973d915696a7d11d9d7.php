<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.billing.create.twig */
class __TwigTemplate_395a9ebea2272e528f20cc6def94b3a0405d7b0c30ca775cb0073093ee5863cf extends \XLite\Core\Templating\Twig\Template
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
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("checkout/steps/shipping/parts/address.create.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("checkout/steps/shipping/parts/address.create.twig", "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.billing.create.twig", 8)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.billing.create.twig";
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
/*  # @ListChild (list="checkout.payment.address.email", weight="100")*/
/*  #}*/
/* */
/* {% if this.isCreateVisible() %}*/
/*   {% include 'checkout/steps/shipping/parts/address.create.twig' %}*/
/* {% endif %}*/
/* */
