<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/section_change_button.twig */
class __TwigTemplate_7b1d9db81ae1895ec0928b62617de714874590b38458e9f6a8bd326eace8c163 extends \XLite\Core\Templating\Twig\Template
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
<section-change-button inline-template>
  <div class=\"checkout_fastlane_section-buttons loading\">
    <a href=\"#\" class=\"mobile_panel-details\" v-on:click.prevent=\"scrollToDetails\">
      <span class=\"title\">Order total:</span>
      <span v-text=\"total_text\" class=\"value\"></span>
    </a>
    <div v-show=\"showPlaceOrder\" class=\"place-button\">
      ";
        // line 14
        $this->startForm("\\XLite\\View\\Form\\Checkout\\Place", array("className" => "place"));        // line 15
        echo "      ";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.place-order.before"))), "html", null, true);
        echo "
        <place-order inline-template>
          ";
        // line 17
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Simple", "label" => "Place order", "style" => "regular-main-button checkout_fastlane_section-place_order", "attributes" => array("v-bind:class" => "classes", "v-on:click" => "placeOrder", "v-bind:title" => "btnTitle", "v-text" => "label")))), "html", null, true);
        // line 26
        echo "

          <p class=\"terms-notice\">
            ";
        // line 29
        echo call_user_func_array($this->env->getFunction('t')->getCallable(), array("Clicking the Place order button you accept: Terms and Conditions", array("URL" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getTermsURL", array(), "method"))));
        echo "
          </p>
        </place-order>
      ";
        // line 32
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget_list')->getCallable(), array($this->env, $context, array(0 => "checkout_fastlane.sections.place-order.after"))), "html", null, true);
        echo "
      ";
        $this->endForm();        // line 34
        echo "    </div>
    <div v-show=\"!showPlaceOrder\" class=\"next-button\">
      <next-button inline-template v-bind:enabled=\"complete\" v-bind:index=\"index\">
        ";
        // line 37
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('widget')->getCallable(), array($this->env, $context, array(0 => "XLite\\View\\Button\\Simple", "label" => "Next step", "style" => "regular-main-button checkout_fastlane_section-next", "attributes" => array("v-on:click" => "requestNext", "v-bind:class" => "classes", "v-bind:title" => "btnTitle", "v-text" => "nextLabel")))), "html", null, true);
        // line 46
        echo "
      </next-button>
    </div>
  </div>
</section-change-button>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/FastLaneCheckout/sections/section_change_button.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 46,  58 => 37,  53 => 34,  49 => 32,  43 => 29,  38 => 26,  36 => 17,  30 => 15,  29 => 14,  19 => 6,);
    }
}
/* {##*/
/*  # Fastlane checkout payment right section*/
/*  #*/
/*  # @ListChild (list="checkout_fastlane.sections.details.right", weight="20")*/
/*  #}*/
/* */
/* <section-change-button inline-template>*/
/*   <div class="checkout_fastlane_section-buttons loading">*/
/*     <a href="#" class="mobile_panel-details" v-on:click.prevent="scrollToDetails">*/
/*       <span class="title">Order total:</span>*/
/*       <span v-text="total_text" class="value"></span>*/
/*     </a>*/
/*     <div v-show="showPlaceOrder" class="place-button">*/
/*       {% form '\\XLite\\View\\Form\\Checkout\\Place' with {className: 'place'} %}*/
/*       {{ widget_list('checkout_fastlane.sections.place-order.before') }}*/
/*         <place-order inline-template>*/
/*           {{ widget(*/
/*           'XLite\\View\\Button\\Simple',*/
/*           label='Place order',*/
/*           style='regular-main-button checkout_fastlane_section-place_order',*/
/*           attributes={*/
/*             'v-bind:class':   'classes',*/
/*             'v-on:click':     'placeOrder',*/
/*             'v-bind:title':   'btnTitle',*/
/*             'v-text':         'label'*/
/*           }) }}*/
/* */
/*           <p class="terms-notice">*/
/*             {{ t('Clicking the Place order button you accept: Terms and Conditions', {'URL': this.getTermsURL()})|raw }}*/
/*           </p>*/
/*         </place-order>*/
/*       {{ widget_list('checkout_fastlane.sections.place-order.after') }}*/
/*       {% endform %}*/
/*     </div>*/
/*     <div v-show="!showPlaceOrder" class="next-button">*/
/*       <next-button inline-template v-bind:enabled="complete" v-bind:index="index">*/
/*         {{ widget(*/
/*           'XLite\\View\\Button\\Simple',*/
/*           label='Next step',*/
/*           style='regular-main-button checkout_fastlane_section-next',*/
/*           attributes={*/
/*             'v-on:click':     'requestNext',*/
/*             'v-bind:class':   'classes',*/
/*             'v-bind:title':   'btnTitle',*/
/*             'v-text':         'nextLabel'*/
/*           }) }}*/
/*       </next-button>*/
/*     </div>*/
/*   </div>*/
/* </section-change-button>*/
/* */
