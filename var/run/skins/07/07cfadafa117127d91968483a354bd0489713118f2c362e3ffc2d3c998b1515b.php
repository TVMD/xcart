<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig */
class __TwigTemplate_820f5acd65a2fbe0385795aca25eac12aed3fcea06594ead72d01f5521600d43 extends \XLite\Core\Templating\Twig\Template
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
        // line 7
        echo "
<div id=\"add_new_card_iframe_container\">

  ";
        // line 10
        if ($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getAddressList", array(), "method")) {
            // line 11
            echo "    <iframe data-src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildUrl", array(0 => "add_new_card", 1 => "xpc_iframe"), "method"), "html", null, true);
            echo "\" width=\"300\" height=\"100%\" border=\"0\" style=\"border: 0px\" id=\"add_new_card_iframe\"></iframe>
    <div class=\"clearfix\"></div>
    <input type=\"button\" value=\"";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save credit card")), "html", null, true);
            echo "\" id=\"submit-button\" class=\"btn regular-button regular-main-button submit add-new-card-button\" />
  ";
        }
        // line 15
        echo "
  <a href=\"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "saved_cards")), "html", null, true);
        echo "\">";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Back to credit cards")), "html", null, true);
        echo "</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 16,  37 => 15,  32 => 13,  26 => 11,  24 => 10,  19 => 7,);
    }
}
/* {##*/
/*  # Form for the add new card */
/*  #*/
/*  #*/
/*  # @ListChild (list="customer.account.add_new_card.form", weight="100")*/
/*  #}*/
/* */
/* <div id="add_new_card_iframe_container">*/
/* */
/*   {% if this.getAddressList() %}*/
/*     <iframe data-src="{{ this.buildUrl('add_new_card', 'xpc_iframe') }}" width="300" height="100%" border="0" style="border: 0px" id="add_new_card_iframe"></iframe>*/
/*     <div class="clearfix"></div>*/
/*     <input type="button" value="{{ t('Save credit card') }}" id="submit-button" class="btn regular-button regular-main-button submit add-new-card-button" />*/
/*   {% endif %}*/
/* */
/*   <a href="{{ url('saved_cards') }}">{{ t('Back to credit cards') }}</a>*/
/* */
/* </div>*/
/* */
