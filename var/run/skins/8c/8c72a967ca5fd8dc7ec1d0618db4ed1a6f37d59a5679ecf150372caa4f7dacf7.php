<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig */
class __TwigTemplate_c4341980ca34f3926682314b282fa60168ad6b6ef5a66133b9496c73d53964e4 extends \XLite\Core\Templating\Twig\Template
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
            echo "    <iframe src=\"";
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "buildUrl", array(0 => "add_new_card", 1 => "xpc_iframe", 2 => array("profile_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomerProfileId", array(), "method"))), "method"), "html", null, true);
            echo "\" width=\"300\" height=\"100%\" border=\"0\" style=\"border: 0px\" id=\"add_new_card_iframe\"></iframe>
    <div class=\"clearfix\"></div>
    <button id=\"submit-button\" class=\"btn regular-main-button\" />";
            // line 13
            echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Save credit card")), "html", null, true);
            echo "</button>
  ";
        }
        // line 15
        echo "
  <a href=\"";
        // line 16
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('url')->getCallable(), array($this->env, $context, "saved_cards", "", array("profile_id" => $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "getCustomerProfileId", array(), "method")))), "html", null, true);
        echo "\" class=\"back-to-cards\" >";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Back to credit cards")), "html", null, true);
        echo "</a>

</div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/XPaymentsConnector/account/add_new_card.form.twig";
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
/*  # Customer's saved credit cards header*/
/*  #*/
/*  #*/
/*  # @ListChild (list="admin.account.add_new_card.form", weight="100")*/
/*  #}*/
/* */
/* <div id="add_new_card_iframe_container">*/
/* */
/*   {% if this.getAddressList() %}*/
/*     <iframe src="{{ this.buildUrl('add_new_card', 'xpc_iframe', {'profile_id': this.getCustomerProfileId()}) }}" width="300" height="100%" border="0" style="border: 0px" id="add_new_card_iframe"></iframe>*/
/*     <div class="clearfix"></div>*/
/*     <button id="submit-button" class="btn regular-main-button" />{{ t('Save credit card') }}</button>*/
/*   {% endif %}*/
/* */
/*   <a href="{{ url('saved_cards', '', {'profile_id': this.getCustomerProfileId()}) }}" class="back-to-cards" >{{ t('Back to credit cards') }}</a>*/
/* */
/* </div>*/
/* */
