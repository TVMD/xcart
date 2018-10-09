<?php

/* /var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/script_init.twig */
class __TwigTemplate_4f7fccfd496812318981e51464f19af5e11011425a28eab76806230c9cb56fe2 extends \XLite\Core\Templating\Twig\Template
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
<script type=\"text/javascript\">
//<![CDATA[
  var lbl_cannot_remove_sold_pincode = '";
        // line 9
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('t')->getCallable(), array("Cannot remove a sold PIN code")), "html", null, true);
        echo "';
  var pins_enabled = \"";
        // line 10
        if ($this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "product", array()), "getPinCodesEnabled", array(), "method")) {
            echo "1";
        }
        echo "\";
//]]>
</script>

";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/admin/modules/CDev/PINCodes/product/script_init.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 10,  24 => 9,  19 => 6,);
    }
}
/* {##*/
/*  # Script variables initialization*/
/*  #*/
/*  # @ListChild (list="product.pinCodes", weight="10")*/
/*  #}*/
/* */
/* <script type="text/javascript">*/
/* //<![CDATA[*/
/*   var lbl_cannot_remove_sold_pincode = '{{ t('Cannot remove a sold PIN code') }}';*/
/*   var pins_enabled = "{% if this.product.getPinCodesEnabled() %}1{% endif %}";*/
/* //]]>*/
/* </script>*/
/* */
/* */
