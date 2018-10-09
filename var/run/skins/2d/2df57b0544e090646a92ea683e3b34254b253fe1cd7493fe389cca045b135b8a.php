<?php

/* /var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.cookie_data.twig */
class __TwigTemplate_c4ab1004867e483d0a254ae7e8f465335f38245b57d0ec641723dd73262baea4 extends \XLite\Core\Templating\Twig\Template
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
<div style=\"display: none;\" class=\"next-previous-cookie-data\" data-xc-product-id=\"";
        // line 7
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["this"]) ? $context["this"] : null), "item", array()), "getProductId", array(), "method"), "html", null, true);
        echo "\"    data-xc-next-previous=\"";
        echo XLite\Core\Templating\Twig\Extension\xcart_twig_escape_filter($this->env, $this->getAttribute((isset($context["this"]) ? $context["this"] : null), "dataString", array()), "html", null, true);
        echo "\"></div>
";
    }

    public function getTemplateName()
    {
        return "/var/www/next/output/xcart/src/skins/customer/modules/XC/NextPreviousProduct/product/parts/body.cookie_data.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 7,  19 => 6,);
    }
}
/* {##*/
/*  # Next product links*/
/*  #*/
/*  # @ListChild (list="next_previous.product.body", weight="200")*/
/*  #}*/
/* */
/* <div style="display: none;" class="next-previous-cookie-data" data-xc-product-id="{{ this.item.getProductId() }}"    data-xc-next-previous="{{ this.dataString }}"></div>*/
/* */
