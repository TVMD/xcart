<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/order_total.twig */
class __TwigTemplate_e05b7012fa29ebf350bb022f39e4ab433cebad9238997b1c66da2d52a781055a extends \XLite\Core\Templating\Twig\Template
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
<order-total inline-template>
    <div class=\"order-total\" v-text='total_text'></div>
</order-total>";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/details/order_total.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.details.right", weight="19")*/
/*  #}*/
/* */
/* <order-total inline-template>*/
/*     <div class="order-total" v-text='total_text'></div>*/
/* </order-total>*/
