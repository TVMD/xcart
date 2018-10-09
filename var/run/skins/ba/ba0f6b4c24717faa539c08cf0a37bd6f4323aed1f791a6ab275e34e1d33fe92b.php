<?php

/* /var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.shipping.create.twig */
class __TwigTemplate_6553447adb23603445b881dde2d12c2d727117c75bea2c980397d29cbbb6168c extends \XLite\Core\Templating\Twig\Template
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
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "isAnonymous", array(), "method")) {
            // line 8
            echo "  ";
            $fullPath = \XLite\Core\Layout::getInstance()->getResourceFullPath("checkout/steps/shipping/parts/address.create.twig");            list($templateWrapperText, $templateWrapperStart) = $this->getThis()->startMarker($fullPath);
            if ($templateWrapperText) {
echo $templateWrapperStart;
}

            $this->loadTemplate("checkout/steps/shipping/parts/address.create.twig", "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.shipping.create.twig", 8)->display($context);
            if ($templateWrapperText) {
                echo $this->getThis()->endMarker($fullPath, $templateWrapperText);
            }
        }
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/checkout/steps/shipping/parts/address.shipping.create.twig";
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
/*  # @ListChild (list="checkout.shipping.address.email", weight="100")*/
/*  #}*/
/* */
/* {% if this.isAnonymous() %}*/
/*   {% include 'checkout/steps/shipping/parts/address.create.twig' %}*/
/* {% endif %}*/
/* */
